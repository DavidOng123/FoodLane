<?php 
include 'db.php';

if(isset($_POST['update_update_btn'])){
    $update_value = $_POST['update_quantity'];
    $update_id = $_POST['update_quantity_id'];
    $update_quantity_query = mysqli_query($con, "UPDATE `cart` SET Quantity = '$update_value' WHERE CartID = '$update_id'");
    if($update_quantity_query){
        header('location:cart.php');
    }
}

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($con, "DELETE FROM `cart` WHERE CartID = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($con, "DELETE FROM `cart`");
   header('location:cart.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    


<style>
   /* .shopping-cart table{
        text-align: center;
        width: 25%;
    }
    
    .shopping-cart table thead th{
        padding: 1.5rem;
        font-size: 2rem;
        color: var(--white);
        background-color: var(--lightsteelblue);
    }
    
    .shopping-cart table tr td{
        border-bottom: var(--border);
        padding: 1.5rem;
        font-size: 2rem;
        color: var(--black);   
    }*/
    
    .shopping-cart table input[type="number"]{
        border: var(--border);
        padding: 1rem 4rem;
        font-size: 2rem;
        color: var(--white);
        width: 10rem;
    }
    
    .shopping-cart table input[type="submit"]{
        padding: 0rem 5rem;
        text-align: center;
        cursor: pointer;
        font-size: 1rem;
        background-color: var(--orange);
        color: var(--white);
    }
    
    shopping-cart table input[type="submit"]:hover{
        background-color: var(--black);
    }
    
    shopping-cart table .table-bottom{
        background-color: var(--lightsteelblue);
    }
    
    
    shopping-cart table{
        width: 100%;
        border-collapse: collapse;
    }
    
    .shopping-cart{
        display: flex;
        flex-wrap: wrap;
    }
    
    .shopping-cart th{
        text-align: left;
        padding: 5px;
        color: #fff;
        background: lightsteelblue;
        font-weight: normal; 
    }
    
    .shopping-cart td{
        padding: 10px 5px;
    }
    
    .shopping-cart td input{
        width: 40px;
        height: 30px;
        padding: 5px;
    }
   
    
    .shopping-cart td a{
        color: lightsteelblue;
        font-size: 12px;
    }
    
    .shopping-cart td img{
        width: 80px;
        height: 80px;
        margin-right: 10px;
    }
 
    td:last-child{
        text-align: right;
    }
    
     th:last-child{
        text-align: right;
    }
    
    .checkout-btn{
        color: lightsteelblue;
    }
    
    @media only screen and (max-width: 600px){
        .cart-info p{
            display: none;
        }
    }
</style>
</head>


<body>

<?php require_once 'header.php' ?>
    
    <div class="container">
        <section class="shopping-cart">
            <br>
            <h3 class="heading">Shopping Cart</h3>
            
            <table>
                <thead>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </thead>
                
                <tbody>
                    
                    <?php 
                    
                    $select_cart = mysqli_query($con, "SELECT * FROM `cart`");
                    $grand_total = 0;
                    if(mysqli_num_rows($select_cart) > 0){
                        while ($fetch_cart = mysqli_fetch_assoc($select_cart)){
                            
                    ?>
                    
                    <tr>
                        <td><img src="images/<?php echo $fetch_cart['image_path'];?>" height="100" alt=""></td>
                        <td><?php echo $fetch_cart['ItemName'];?></td>
                        <td>RM <?php echo number_format($fetch_cart['Price']);?></td>
                        <td>
                            <form action="" method="post">
                                <input type="hidden" name="update_quantity_id" value="<?php echo $fetch_cart['CartID'];?>">
                                <input type="number" name="update_quantity" min="1" value="<?php echo $fetch_cart['Quantity'];?>">
                                <input type="submit" value="update" name="update_update_btn">
                            </form>
                        </td>
                        <td>RM <?php  echo $sub_total = number_format($fetch_cart['Price']) * $fetch_cart['Quantity']?></td>
                        <td><a href="cart.php?remove=<?php echo $fetch_cart['CartID'];?>" onclick="return confirm('Remove item from cart?')" class="delete-btn"> <i class="fas fa-trash"></i>Remove</a></td>
                    </tr>
                    
                <br>
                    
                    <?php
                    $grand_total += $sub_total;                    
                        };
                    };
                    ?>
                    <tr class="table-bottom">
                        <td><a href="shop.php" class="option-btn" style="margin-top: 0;">Continue Shopping</a></td>
                        <td colspan="3">Grand Total</td>
                        <td>RM <?php echo $grand_total; ?></td>
                        <td><a href="cart.php?delete_all" onclick="return confirm('Are you sure you want to delete all?');" class="delete-btn"><i class="fas fa-trash">Delete all</i></a></td>
                    </tr>
                   
                </tbody>
                </table>
            
             <div class="checkout-btn">
                <a href="checkout.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">procced to checkout</a>
                <br>
                <br>
                <tr>
                    <td><div id="paypal-payment-button"></td>                    
                </tr>
                
             </div>
            
           
                
            
            
        </section>
        
    </div>
    
<script src="js/script.js"></script>    
    
<script src="https://www.paypal.com/sdk/js?client-id=Aen8MDfk0jNq2bAsAUwzkMNCi0tgF-KMLuI0elE6EDqFQ9jYh7EmcyywPn0sHDBQ8s3IBsBAcpumJ-9I"></script>
<script>paypal.Buttons().render("#paypal-payment-button");</script>

</body>
<?php require_once 'footer.php' ?>
</html>

<!-- prodcuts section ends -->

