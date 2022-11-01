<?php 
include 'db.php';
if (isset($_POST['add_to_cart']))
    
    $ItemName = $_POST['ItemName'];
    $image_path = $_POST['image_path'];
    $Price = $_POST['Price'];
    $Quantity = 1;
    
    $select_cart = mysqli_query($con, "SELECT * FROM cart WHERE ItemName= '$ItemName'");
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<style>
:root{
    --pink:#e84393;
}

*{
    margin:0; padding:0;
    box-sizing: border-box;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}

html{
    font-size: 62.5%;
    scroll-behavior: smooth;
    scroll-padding-top: 6rem;
    overflow-x: hidden;
}

section{
    padding:2rem 9%;
}

.products .box-container{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
    background: lightgray;
}

.products .box-container .box{
    flex:1 1 30rem;
    box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.1);
    border-radius: .5rem;
    border:.1rem solid rgba(0,0,0,.1);
    position: relative;    
}

.products .box-container .box .discount{
    position: absolute;
    top:1rem; left:1rem;
    padding:.7rem 1rem;
    font-size: 2rem;
    color:var(--pink);
    background:rgba(255, 51, 153,.05);
    z-index: 1;
    border-radius: .5rem;
}

.products .box-container .box .image{
    position: relative;
    text-align: center;
    padding-top: 2rem;
    overflow:hidden;
}

.products .box-container .box .image img{
    height:25rem;
}

.products .box-container .box:hover .image img{
    transform: scale(1.1);
}

.products .box-container .box .image .icons{
    position: absolute;
    bottom:-7rem; left:0; right:0;
    display: flex;
}

.products .box-container .box:hover .image .icons{
    bottom:0;
}

.products .box-container .box .image .icons a{
    height: 5rem;
    line-height: 5rem;
    font-size: 2rem;
    width:50%;
    background:var(--blue);
    color:#fff;
}

.products .box-container .box .image .icons .cart-btn{
    border-left: .1rem solid #fff7;
    border-right: .1rem solid #fff7;
    width:100%;
}

.products .box-container .box .image .icons a:hover{
    background:#333;
}

.products .box-container .box .content{
    padding:2rem;
    text-align: center;
}

.products .box-container .box .content h3{
    font-size: 2.5rem;
    color:#333;
}

.products .box-container .box .content .price{
    font-size: 2.5rem;
    color:lightsteelblue;
    font-weight: bolder;
    padding-top: 1rem;
}

.products .box-container .box .content .price span{
    font-size: 1.5rem;
    color:lightsteelblue;
    font-weight: lighter;
    text-decoration: line-through;
}

button{
    border: 2px solid lightsteelblue;
    background: steelblue;
    color: white;
    font-weight: bold;
    margin: 20px;
    padding: 5px 10px;
}

button:hover{
    box-shadow: 0 0 5px 5px lightsteelblue inset;
}
    

</style>
</head>


<body>

<?php require_once 'header.php' ?>

<section class="products" id="products">

    <h1 class="text-center">Food</h1>
    <br>

    <div class="box-container">
        <?php 
        include 'db.php';
        $qry = $con->query("SELECT * FROM item WHERE ItemType='Food'");
        while($row = $qry->fetch_assoc()):
        ?>

        <div class="box">
            <div class="image">
                <img src="images/<?php echo $row['image_path']?>" class="card-img-top" alt="...">
            </div>
            <div class="content">
                <h3 class="content-title"><?php echo $row['ItemName']?></h3>
                <p class="content-description"><?php echo $row['ItemDesc']?></p>
                <div class="price"><?php echo $row ['Price']?>  
                <h5 class="text-info">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
                    <//input type="number" id="quantity" name="quantity" min="1" max="10"></div>
                <br>
                <input type='submit' name='add_to_cart' class='btn' value='add to cart'>
                
                <script>
                    /*var addItemId = 0;
                    function addToCart(item) {
                        addItemId += 1;
                        var selectedItem = document.createElement('div');
                        selectedItem.classList.add('cartImg');
                        selectedItem.setAttribute('id',addItemId);
                        var img = document.createElement('img');
                        img.setAttribute('src', item.children[0].currentSrc);
                        var cartItems = document.getElementById('small-container cart-page');
                        selectedItem.append(img);
                        cartItems.append(selectedItem);
                    }*/                
                </script>
                
            </div>
        </div>
        <?php endwhile; ?>

    </div>


</section>
</body>
<?php require_once 'footer.php' ?>
</html>

<!-- products section ends -->

