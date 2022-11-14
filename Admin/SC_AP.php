<?php
session_start();
include("server.php");

if(isset($_POST['add_product'])){
   $p_name = $_POST['p_name'];
   $p_type = $_POST['p_type'];
   $p_desc = $_POST['p_desc'];
   $p_price = $_POST['p_price'];
   $p_quantity = $_POST['p_quantity'];
   $p_image = $_FILES['p_image']['name'];
   $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
   $p_image_folder = 'uploaded_img/'.$p_image;

   $insert_query = mysqli_query($con, "INSERT INTO `item`(`ItemName`, `Price`, `Item_img` , `ItemDesc`, `Quantity`, `ItemType`) VALUES ('$p_name','$p_price','$p_image','$p_desc','$p_quantity','$p_type');") or die('query failed');


   if($insert_query){
      move_uploaded_file($p_image_tmp_name, $p_image_folder);
      $message[] = 'product add succesfully';
      $_SESSION['AdminStatus'] = 'Added Successfully';
   }else{
      $message[] = 'could not add the product';
      $_SESSION['AdminStatus2'] = 'Added Unsuccessfully';
   }
};

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Dashboard - FoodLane - Admin </title>
        
        <!-- Bootstrap CSS & Sweet Alert CDN-->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" />            
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        
        
       
        
        
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
                 
                    <?php 

                        if(isset($_SESSION['AdminStatus'])){

                            ?>
                            <script>
                            Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Product Added Successfully',
                            showConfirmButton: false,
                            timer: 1500
                            })
                            </script>

                    <?php
                         unset($_SESSION['AdminStatus']);  
                     }

                     ?>
        
                  <br>
                  <br>
                
                  
                 <form action="" method="post" class="add-product-form" enctype="multipart/form-data">
                    <div class="container mt-5 mb-5 d-flex justify-content-center">
                        <div class="card px-1 py-4">
                            <div class="card-body">
                                <h3 class="card-title mb-3" style="text-align: center;">Add New Item</h3>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="p_name" id="p_name" placeholder="Enter the Item Name" class="form-control" required> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="p_type" id="p_type" placeholder="Enter the Item Type" class="form-control" required> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="p_desc"  id="p_desc"placeholder="Enter the Item description" class="form-control" required> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="input-group"> 
                                                <input type="number" name="p_price" id="p_price"min="0" placeholder="Enter the Item Price"  class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="input-group"> 
                                                <input type="number" name="p_quantity" id="p_price"min="0" placeholder="Enter the Item Quantity"  class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                                 
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="input-group">                               
                                                <input type="file" name="p_image" id="p_image" accept="image/png, image/jpg, image/jpeg" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <input type="submit" value="Add  product" name="add_product"  class="btn btn-primary btn-block confirm-button">
                            </div>
                        </div>
                    </div>
                </form>    
                     
                    
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
        
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        
        
        
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
        </script>
    </body>
</html>