<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<style>
    .cart-page{
        margin: 15px auto;
        background: lightgray;
    }
    table{
        width: 100%;
        border-collapse: collapse;
    }
    
    .cart-info{
        display: flex;
        flex-wrap: wrap;
    }
    
    th{
        text-align: left;
        padding: 5px;
        color: #fff;
        background: lightsteelblue;
        font-weight: normal; 
    }
    
    td{
        padding: 10px 5px;
    }
    
    td input{
        width: 40px;
        height: 30px;
        padding: 5px;
    }
    
    td a{
        color: lightsteelblue;
        font-size: 12px;
    }
    
    td img{
        width: 80px;
        height: 80px;
        margin-right: 10px;
    }
    
    .total-price{
        display: flex;
        justify-content: flex-end;
    }
    
    .total-price table{
        border-top: 3px solid lightsteelblue;
        width: 100%;
        max-width: 400px;
    }
    
    .total-price button{
        width: 100%;
    }
    td:last-child{
        text-align: right;
    }
    
     th:last-child{
        text-align: right;
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

<div class ="small-container cart-page">
    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/burger.png">
                    <div>
                        <p>Food</p>
                        <small>Price: $50.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                    
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>$50.00</td>
        </tr>
        
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/burger.png">
                    <div>
                        <p>Food</p>
                        <small>Price: $50.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                    
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>$50.00</td>
        </tr>
        
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/burger.png">
                    <div>
                        <p>Food</p>
                        <small>Price: $50.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                    
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>$50.00</td>
        </tr>
        
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/burger.png">
                    <div>
                        <p>Food</p>
                        <small>Price: $50.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                    
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>$50.00</td>
        </tr>
    </table>
    
    <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>$150.00</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>$20.00</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>$170.00</td>
            </tr>
            <tr>
                <td><div id="paypal-payment-button"></td>
            </tr>
        </table>
</div>

<script src="https://www.paypal.com/sdk/js?client-id=Aen8MDfk0jNq2bAsAUwzkMNCi0tgF-KMLuI0elE6EDqFQ9jYh7EmcyywPn0sHDBQ8s3IBsBAcpumJ-9I"></script>
<script>paypal.Buttons().render("#paypal-payment-button");</script>

</body>
<?php require_once 'footer.php' ?>
</html>

<!-- prodcuts section ends -->

