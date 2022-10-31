<?php  
 $connect = mysqli_connect("localhost", "root", "", "foodlane");  
 $query = "SELECT ItemType, count(*) as number FROM item GROUP BY ItemType";  
 $result = mysqli_query($connect, $query);  
 ?>  


 <!DOCTYPE html>  
 <html>  
      <head>           
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
      </head>  
      <body>  
           <br><br>  
           <div>              
                <br>  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>
           
           
           
           <script>  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
            var data = google.visualization.arrayToDataTable([  
                      ['ItemType', 'Number'],  
                      <?php  
                      while($row = mysqli_fetch_array($result))  
                      {  
                           echo "['".$row["ItemType"]."', ".$row["number"]."],";  
                      }  
                      ?>  
                ]);  
               
               
            var options = {  
                title: '',  
                //is3D:true,  
                pieHole: 0.4  
               };  
              var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
              chart.draw(data, options);  
            }  
           </script>  
           
           
           
      </body>  
 </html>  