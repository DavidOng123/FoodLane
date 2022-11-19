<?php

$connect = new PDO("mysql:host=localhost;dbname=foodlane", "root", "");


if(isset($_POST["action"]))
{
	if($_POST["action"] == 'fetch')
	{
		$order_column = array('reservationID', 'pax', 'date','time');

		$main_query = "
		SELECT reservationID, SUM(pax) AS pax, date, time 
		FROM reservation 
		";

		$search_query = 'WHERE date <= "'.date('Y-m-d').'" AND ';

                
                if(isset($_POST["start_date"], $_POST["end_date"]) && $_POST["start_date"] != '' && $_POST["end_date"] != '')
		{
			$search_query .= 'date >= "'.$_POST["start_date"].'" AND date <= "'.$_POST["end_date"].'" AND ';
		}
                
                
                //Search Function 
		if(isset($_POST["search"]["value"]))
		{
			$search_query .= '(reservationID LIKE "%'.$_POST["search"]["value"].'%" OR pax LIKE "%'.$_POST["search"]["value"].'%" OR date LIKE "%'.$_POST["search"]["value"].'%")';
		}

                
		$group_by_query = " GROUP BY date ";

		$order_by_query = "";

		if(isset($_POST["order"]))
		{
			$order_by_query = 'ORDER BY '.$order_column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
		}
		else
		{
			$order_by_query = 'ORDER BY date DESC ';
		}

		$limit_query = '';

		if($_POST["length"] != -1)
		{
			$limit_query = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
		}

		$statement = $connect->prepare($main_query . $search_query . $group_by_query . $order_by_query);

		$statement->execute();

		$filtered_rows = $statement->rowCount();

		$statement = $connect->prepare($main_query . $group_by_query);

		$statement->execute();

		$total_rows = $statement->rowCount();

		$result = $connect->query($main_query . $search_query . $group_by_query . $order_by_query . $limit_query, PDO::FETCH_ASSOC);

		$data = array();

		foreach($result as $row)
		{
			$sub_array = array();

			$sub_array[] = $row['reservationID'];

			$sub_array[] = $row['pax'];

			$sub_array[] = $row['date'];
                        
                        $sub_array[] = $row['time'];

			$data[] = $sub_array;
		}

		$output = array(
			"draw"			=>	intval($_POST["draw"]),
			"recordsTotal"	=>	$total_rows,
			"recordsFiltered" => $filtered_rows,
			"data"			=>	$data
		);

		echo json_encode($output);
	}
}

?>
