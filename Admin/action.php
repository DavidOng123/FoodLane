<?php

$connect = new PDO("mysql:host=localhost;dbname=foodlane", "root", "", 3307);


if(isset($_POST["action"]))
{
	if($_POST["action"] == 'fetch')
	{
		$order_column = array('reserve_id', 'Pax', 'reserve_date_time');

		$main_query = "
		SELECT reserve_id, SUM(Pax) AS Pax, reserve_date_time 
		FROM reservation 
		";

		$search_query = 'WHERE reserve_date_time <= "'.date('Y-m-d').'" AND ';

                
                if(isset($_POST["start_date"], $_POST["end_date"]) && $_POST["start_date"] != '' && $_POST["end_date"] != '')
		{
			$search_query .= 'reserve_date_time >= "'.$_POST["start_date"].'" AND reserve_date_time <= "'.$_POST["end_date"].'" AND ';
		}
                
                
		if(isset($_POST["search"]["value"]))
		{
			$search_query .= '(reserve_id LIKE "%'.$_POST["search"]["value"].'%" OR Pax LIKE "%'.$_POST["search"]["value"].'%" OR reserve_date_time LIKE "%'.$_POST["search"]["value"].'%")';
		}

		$group_by_query = " GROUP BY reserve_date_time ";

		$order_by_query = "";

		if(isset($_POST["order"]))
		{
			$order_by_query = 'ORDER BY '.$order_column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
		}
		else
		{
			$order_by_query = 'ORDER BY reserve_date_time DESC ';
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

			$sub_array[] = $row['reserve_id'];

			$sub_array[] = $row['Pax'];

			$sub_array[] = $row['reserve_date_time'];

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
