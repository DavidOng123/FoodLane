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
    color:var(--pink);
    font-weight: bolder;
    padding-top: 1rem;
}

.products .box-container .box .content .price span{
    font-size: 1.5rem;
    color:#999;
    font-weight: lighter;
    text-decoration: line-through;
}
</style>
</head>


<body>

<?php require_once 'header.php' ?>

<section class="products" id="products">

    <h1 class="text-center">Merchandise</h1>
    <br>

    <div class="box-container">

        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="images/1.jpg" alt="">
                <div class="icons">
                    <a href="#
                       " class="cart-btn">add to cart</a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99 <span>$15.99</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-15%</span>
            <div class="image">
                <img src="images/3.jpg" alt="">
                <div class="icons">
                    <a href="#" class="cart-btn">add to cart</a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99 <span>$15.99</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-5%</span>
            <div class="image">
                <img src="images/4.jpg" alt="">
                <div class="icons">
                    <a href="#" class="cart-btn">add to cart</a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99 <span>$15.99</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-20%</span>
            <div class="image">
                <img src="images/4.jpg" alt="">
                <div class="icons">
                    <a href="#" class="cart-btn">add to cart</a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99 <span>$15.99</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-17%</span>
            <div class="image">
                <img src="images/3.jpg" alt="">
                <div class="icons">
                    <a href="#" class="cart-btn">add to cart</a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99 <span>$15.99</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-3%</span>
            <div class="image">
                <img src="images/1.jpg" alt="">
                <div class="icons">
                    <a href="#" class="cart-btn">add to cart</a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99 <span>$15.99</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-18%</span>
            <div class="image">
                <img src="images/3.jpg" alt="">
                <div class="icons">
                    <a href="#" class="cart-btn">add to cart</a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99 <span>$15.99</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="images/1.jpg" alt="">
                <div class="icons">
                    <a href="#" class="cart-btn">add to cart</a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99 <span>$15.99</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-5%</span>
            <div class="image">
                <img src="images/4.jpg" alt="">
                <div class="icons">
                    <a href="#" class="cart-btn">add to cart</a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99 <span>$15.99</span> </div>
            </div>
        </div>

    </div>

</section>
</body>
<?php require_once 'footer.php' ?>
</html>

<!-- prodcuts section ends -->

