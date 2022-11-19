<?php 
session_start();
include("server.php");


if(isset($_POST['update_product'])){
   
   $update_p_id = $_POST['update_order_id'];
   $update_orderStatus = $_POST['update_orderStatus'];
   $update_paymentStatus = $_POST['update_PaymentStatus'];
   

   $update_query = mysqli_query($con, "UPDATE `orders` SET OrderStatus = '$update_orderStatus', PaymentStatus ='$update_paymentStatus' WHERE OrderID = '$update_p_id'");

   
   if($update_query){
      
      header('location:SC_MO.php');
      $_SESSION['AdminStatus4'] = 'Added Unsuccessfully';

   }
   
   else{
      $message[] = 'product could not be updated';
      header('location:SC_MO.php');
   }

}

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
        
        
       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">

   <style>

     :root{
       --blue:#2980b9;
       --red:tomato;
       --orange:orange;
       --black:#333;
       --white:#fff;
       --bg-color:#eee;
       --dark-bg:rgba(0,0,0,.7);
       --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
       --border:.1rem solid #999;
    }


/*    .btn,*/
    .option-btn,
    .delete-btn{
       display: block;
       width: 100%;
       text-align: center;
       background-color: var(--blue);
       color:var(--white);
       font-size: 1rem;
       padding:1rem 2rem;
       border-radius: .5rem;
       cursor: pointer;
       margin-top: 1rem;
    }

    .btn:hover,
    .option-btn:hover,
    .delete-btn:hover{
       background-color: var(--black);
    }

    .option-btn i,
    .delete-btn i{
       padding-right: .5rem;
    }

    .option-btn{
       background-color: var(--orange);
    }

    .delete-btn{
       margin-top: 0;
       background-color: var(--red);
    }    


    .display-product-table table{
       width: 100%;
       text-align: center;
    }

    .display-product-table table thead th{
       padding:1.5rem;
       font-size: 1.3rem;
       background-color: var(--black);
       color:var(--white);
    }

    .display-product-table table td{
       padding:1.5rem;
       font-size: 1rem;
       color:var(--black);
    }

    .display-product-table table td:first-child{
       padding:0;
    }

    .display-product-table table tr:nth-child(even){
       background-color: var(--bg-color);
    }

    .display-product-table .empty{
       margin-bottom: 2rem;
       text-align: center;
       background-color: var(--bg-color);
       color:var(--black);
       font-size: 2rem;
       padding:1.5rem;
    }


    .edit-form-container{
       position: fixed;
       top:0; left:0;
       z-index: 1100;
       background-color: var(--dark-bg);
    /*   padding:2rem;*/
       display: none;
       align-items: center;
       justify-content: center;
       min-height: 100vh;
       width: 100%;
    }

    .edit-form-container form{
       width: 50rem;
       border-radius: .5rem;
       background-color: var(--white);
       text-align: center;
       padding:2rem;
    }

    .edit-form-container form .box{
       width: 30%;
       background-color: var(--bg-color);
       border-radius: .5rem;
       margin:1rem 0;
       font-size: 1.5rem;
       color:var(--black);
       padding:1.2rem 1.0rem;
       text-transform: none;
    }


        </style>     
        
    </head>
    
    
    <body class="sb-nav-fixed"  style= "background: linear-gradient(to right,#A6BCE8 , #FFC0C0);">
        
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
                                Product Control
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="SC_MP.php">Manage Product</a>                                  
                                    <a class="nav-link" href="SC_AP.php">Add Product</a>
                                     <a class="nav-link" href="SC_MO.php">Manage Order Status</a>
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
                                        Reservation
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="bookinglist.php">Booking List</a>                                        
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
                                Customer Information
                            </a>
                        </div>
                    </div>
                    
                </nav>
            </div>
            
            
            <div id="layoutSidenav_content">
                
                
                 <main style= "background: linear-gradient(to right,#9984AF , #FFEFF9);">
                      
                    <?php 
                        if(isset($_SESSION['AdminStatus4'])){
                            ?>
                            <script>
                            Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Item Update Successfully',
                            showConfirmButton: false,
                            timer: 1500
                            })
                            </script>
                    <?php
                         unset($_SESSION['AdminStatus4']);  
                        }
                    ?>
                     
                    <?php 
                        if(isset($_SESSION['AdminStatus3'])){
                            ?>
                            <script>
                            Swal.fire(
                                'Product Deleted !',
                                '',
                                'success'
                            )
                            </script>
                       <?php
                            unset($_SESSION['AdminStatus3']);  
                        }
                    ?>
                            
                            
                    
                     
                    <br>
                    <h3 style="text-align:center">  <i class="fas fa-tasks"></i> Manage Order Request</h3>
                    <br>

                     <div class="container">

                         <section class="display-product-table">

                         <table>

                            <thead>
                               <th>Customer Name</th>
                               <th>Phone Number</th>
                               <th>Email</th>
                               <th>Total Products</th>
                               <th>Total Price</th>
                               <th>Method</th>
                               <th>Order Status</th>
                               <th>Payment Status</th>
                               <th>Order Status</th>
                               
                            </thead>

                            <tbody>
                               <?php

                                  $select_products = mysqli_query($con, "SELECT * FROM `orders`");
                                  if(mysqli_num_rows($select_products) > 0){
                                     while($row = mysqli_fetch_assoc($select_products)){
                               ?>

                               <tr>
                                  <td><?php echo $row['CustName']; ?></td>
                                  <td><?php echo $row['PhoneNum']; ?></td>
                                  <td><?php echo $row['Email']; ?></td>
                                  <td><?php echo $row['total_products']; ?></td>
                                  <td><?php echo $row['total_price']; ?></td>
                                  <td><?php echo $row['method']; ?></td>
                                  <td><?php echo $row['OrderStatus']; ?></td>
                                  <td><?php echo $row['PaymentStatus']; ?></td>
                                  
                                  <td>                                    
                                     <a href="SC_MO.php?edit=<?php echo $row['OrderID']; ?>" class="option-btn"> <i class="fas fa-edit"></i> update </a>
                                  </td>
                               </tr>

                               <?php
                                  };    
                                  }else{
                                     echo "<div class='empty'>no product added</div>";
                                  };
                               ?>
                            </tbody>
                         </table>

                         </section>




                         <section class="edit-form-container">

                             <?php

                             if(isset($_GET['edit'])){
                                $edit_id = $_GET['edit'];
                                $edit_query = mysqli_query($con, "SELECT * FROM `orders` WHERE OrderID = $edit_id");
                                if(mysqli_num_rows($edit_query) > 0){
                                   while($fetch_edit = mysqli_fetch_assoc($edit_query)){
                             ?>

                             <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="update_order_id" value="<?php echo $fetch_edit['OrderID']; ?>">
                                
                                
                                <h3>Order Status</h3>
                                <input type="text" class="box" required name="update_orderStatus"  list="OrderStatus" value="<?php echo $fetch_edit['OrderStatus']; ?>">
                                <datalist id="OrderStatus">
                                  <option value="Reject">
                                  <option value="Approve">
                                </datalist>
                                
                                
                             
                                <h3>Payment Status</h3>
                                <input type="text" class="box" required name="update_PaymentStatus"  list="PaymentStatus" value="<?php echo $fetch_edit['PaymentStatus']; ?>">
                                <datalist id="PaymentStatus">
                                  <option value="Reject">
                                  <option value="Approve">
                                </datalist>
                                
                                
                                
                                
                                <input type="submit" value="Update the Item" name="update_product" class="option-btn">
                                <input type="reset" value="Cancel" id="close-edit" name="close-edit" class="option-btn">
                             </form>

                             <?php
                                      };
                                   };
                                   echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
                                };
                             ?>

                         </section>

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
        
        
         <script>
            let menu = document.querySelector('#menu-btn');
            let navbar = document.querySelector('.header .navbar');

            menu.onclick = () =>{
               menu.classList.toggle('fa-times');
               navbar.classList.toggle('active');
            };

            window.onscroll = () =>{
               menu.classList.remove('fa-times');
               navbar.classList.remove('active');
            };


            document.querySelector('#close-edit').onclick = () =>{
               document.querySelector('.edit-form-container').style.display = 'none';
               window.location.href = 'SC_MP.php';
            }; 

            
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
