<?php  
 $connect = mysqli_connect("localhost", "root", "", "foodlane");  
 $query = "SELECT itemType, count(*) as number FROM item GROUP BY itemType";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>           
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
                      ['itemType', 'Number'],  
                      <?php  
                      while($row = mysqli_fetch_array($result))  
                      {  
                           echo "['".$row["itemType"]."', ".$row["number"]."],";  
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