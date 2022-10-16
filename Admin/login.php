<?php 
session_start();

    include("server.php");
    
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
            //something was posted
            $username = $_POST['username'];
            $password = $_POST['password'];
            

            if(!empty($username) && !empty($password) && !is_numeric($username))
            {

                //read from database
                $query = "select * from customer where CustName = '$username' limit 1";
                $result = mysqli_query($con, $query);

                if($result)
                {
                    if($result && mysqli_num_rows($result) > 0)
                    {
                        $user_data = mysqli_fetch_assoc($result);

                        if($user_data['password'] === $password)
                        {
                            
                            //Validate user type
                            if ($user_data['usertype']=="admin"){
                                
                            $_SESSION['username'] =  $username;
                            
                            header("Location: index.php");
                            
                            }
                            
                            else{
                                 $_SESSION['StatusInvalid'] = 'Invalid Username OR Password !';
                            }

          
                        }
                    }
                    
                }

                    $_SESSION['StatusInvalid'] = 'Invalid Username OR Password !';
            }else
            {
                    $_SESSION['StatusInvalid'] = 'Invalid Username OR Password !';
            }
	}

?>


<!DOCTYPE html>
<html lang="en">

    <head>
	
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Admin Login </title>
	<link rel="stylesheet" href="css/admin_login_style.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>

    
    
    <body>
        
    <?php 

    if(isset($_SESSION['StatusInvalid'])){
        ?>
        <script>
        Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Username OR Password incorrect!',
        footer: '<a href="../customerService.php">Why do I have this issue?</a>'
        })
        </script>

        
   
   <?php
        unset($_SESSION['StatusInvalid']);
            
    }
    ?>    
        
    
        <div class="box">
                <form autocomplete="off" class="form col" method="post">
                        <h2>Admin Sign In</h2>
                        <div class="inputBox">
                                <input type="text" required="required" name="username" id="username">
                                <span>Username</span>
                                <i></i>
                        </div>
                        <div class="inputBox">
                                <input type="password" required="required" minlength="8" name="password" id="password">
                                <span>Password</span>
                                <i></i>
                        </div>
                        <div class="links">
                                <a href="#" style="color: transparent; ">Forgot Password ?</a>
                                <a href="../index.php">Back To Home</a>
                        </div>
                        <input type="submit" value="Login" class="btn">
                       
                </form>
        </div>



        <script>
            const btn = document.querySelector(".btn");
            const formEl = document.querySelector(".form");

            var position;

            // mouse hover event listener
            btn.addEventListener("mouseover", function () {
              //form validation callback return true or false, trigged because of built in form validation in HTML 'required'
              if (!formEl.checkValidity()) {
                position ? (position = 0) : (position = 200);
                //adding the css animation property
                btn.style.transform = `translate(${position}px, 0px)`;
                btn.style.transition = "all 0.3s ease";
              } else {
                return;
              }
            });

            //on click function
            btn.addEventListener("click", function () {
              e.preventDefault();
              alert("welldone");
            });                
        </script>



    </body>
</html>