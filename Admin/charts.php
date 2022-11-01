<?php  
 $connect = mysqli_connect("localhost", "root", "", "foodlane",3307);  
 $query = "SELECT ItemType, count(*) as number FROM item GROUP BY ItemType";  
 $result = mysqli_query($connect, $query);  
 ?>  

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Chart - FoodLane Admin</title>
        
        
        <!-- Chart js & Datatable Bootstrap & CDN-->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        
  
        <!-- Bootstrap CSS -->
        <link href="library/bootstrap-5/bootstrap.min.css" rel="stylesheet" />
        <link href="library/dataTables.bootstrap5.min.css" rel="stylesheet" />
        <link href="library/daterangepicker.css" rel="stylesheet" />

        <script src="library/jquery.min.js"></script>
        <script src="library/bootstrap-5/bootstrap.bundle.min.js"></script>
        <script src="library/moment.min.js"></script>
        <script src="library/daterangepicker.min.js"></script>
        <script src="library/Chart.bundle.min.js"></script>
        <script src="library/jquery.dataTables.min.js"></script>
        <script src="library/dataTables.bootstrap5.min.js"></script>
        

        <!--Google Chart CDN-->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
        
    </head>
    
    
   <body class="sb-nav-fixed" style= "background: linear-gradient(to right,#A6BCE8 , #FFC0C0);">
        
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">FOODLANE Admin</a>
            
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    
                </div>
            </form>
            
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="setting.php">Settings</a></li>
                       
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" onclick="sweetalert()" >Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        
        <div id="layoutSidenav">
            
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Stock Control
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="SC_MP.php">Manage Product</a>
                                    <a class="nav-link" href="SC_AP.php">Add Product</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Restaurant
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Manage Reservation
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Booking List</a>                                        
                                        </nav>
                                    </div>
                                  </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    
                </nav>
            </div>
            
            
            <div id="layoutSidenav_content">
                
                
                <main>
                    
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Charts</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Charts</li>
                        </ol>
                   
                        
                        
                        <!-- Bar Chart-->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-bar me-1"></i>
                                Reservation Bar Chart
                            </div>                          
                            <div class="card-header">
                                    <div class="row">
                                        <div class="col col-sm-9"></div>
                                        <div class="col col-sm-3">
                                            <input type="text" id="daterange_textbox" class="form-control" readonly />
                                        </div>
                                     </div>
                            </div>                                                     
                            <div class="container-fluid">
                                    <div class="card-body">
                                        <div class="table-responsive" >
                                            <div class="chart-container pie-chart">
                                                <canvas id="bar_chart" height="40"> </canvas>
                                            </div>
                                            <br>
                                            <br>

                                            <table class="table table-striped table-bordered" id="order_table">
                                                <thead>
                                                    <tr>
                                                        <th>Reservation ID</th>
                                                        <th>Pax</th>
                                                        <th>Reservation Date & Time</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>                               
                            </div>              
                        </div>
                        
                        
                        
                        <!--Pie Chart-->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-pie me-1"></i>
                                        Product Type Pie Chart
                                    </div>
                                
                                <div class="card-body">                              
                                    <div id="piechart" width="100%" height="50"></div>  
                                </div>
                             
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <!--Area Chart-->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Area Chart Example
                            </div>
                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>                          
                        </div>
                        
                        
                      
                    </div>
                </main>
                
                
                
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; FOODLANE 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
       
       
        <script src="js/scripts.js"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
       
        
        
        <script>
            
            
            function sweetalert(){
                Swal.fire({
                title: 'Are you sure to logout?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
              }).then((result) => {
                if (result.isConfirmed) {

                  window.location.href="login.php";

                }
              })       
            }
            
            
            
        $(document).ready(function(){

            fetch_data();

            var sale_chart;

            function fetch_data(start_date = '', end_date = '')
            {
                var dataTable = $('#order_table').DataTable({
                    "processing" : true,
                    "serverSide" : true,
                    "order" : [],
                    "ajax" : {
                        url:"action.php",
                        type:"POST",
                        data:{action:'fetch', start_date:start_date, end_date:end_date}
                    },
                    "drawCallback" : function(settings)
                    {
                        var sales_date = [];
                        var sale = [];

                        for(var count = 0; count < settings.aoData.length; count++)
                        {
                            sales_date.push(settings.aoData[count]._aData[2]);
                            sale.push(parseFloat(settings.aoData[count]._aData[1]));
                        }

                        var chart_data = {
                            labels:sales_date,
                            datasets:[
                                {
                                    label : 'Pax',
                                    backgroundColor : 'rgb(255, 205, 86)',
                                    color : '#fff',
                                    data:sale
                                }
                            ]   
                        };

                        var group_chart3 = $('#bar_chart');

                        if(sale_chart)
                        {
                            sale_chart.destroy();
                        }

                        sale_chart = new Chart(group_chart3, {
                            type:'bar',
                            data:chart_data
                        });
                    }
                });
            }


            $('#daterange_textbox').daterangepicker({
                ranges:{
                    'Today' : [moment(), moment()],
                    'Yesterday' : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days' : [moment().subtract(29, 'days'), moment()],
                    'This Month' : [moment().startOf('month'), moment().endOf('month')],
                    'Last Month' : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                format : 'YYYY-MM-DD'
            }, function(start, end){

                $('#order_table').DataTable().destroy();

                fetch_data(start.format('YYYY-MM-DD'), end.format('YYYY-MM-DD'));

            });

        });
        
        
        
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
