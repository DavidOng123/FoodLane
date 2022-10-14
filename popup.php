<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Automatic Popup</title>
    <!--Google Fonts-->
<!--    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">-->
     
<style>
*,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}


.popup{
    background-color: #FFEFD5 ;
    width: 350px;
    padding: 30px 40px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
    border-radius: 8px;
    font-family: "Poppins",sans-serif;
    display: none;
    text-align: center;
}

.popup button{
    display: block;
    margin:  0 0 20px auto;
    background-color: transparent;
    font-size: 30px;
    color: #c5c5c5;
    border: none;
    outline: none;
    cursor: pointer;
}

.popup p{
    font-size: 14px;
    text-align: justify;
    margin: 20px 0;
    line-height: 25px;
}

</style>     

</head>




<body>
    
    <div class="popup">
        <button id="close">&times;</button>
        <h3> Register Account Now !  </h3>
        <p>
            <center>Reserve and buy food with us ! </center>
        </p>
        <a href="login.php" style="
        display: block;
        width: 150px;
        position: relative;
        margin: 10px auto;
        text-align: center;
        background-color: #0f72e5;
        color: #ffffff;
        text-decoration: none;
        padding: 5px 0;">
        Let's Go</a>
    </div>
    
    
    <!--Script-->
    <script>
                
    window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".popup").style.display = "block";
        },
        1000
        )
    });


    document.querySelector("#close").addEventListener("click", function(){
        document.querySelector(".popup").style.display = "none";
    });
    
    </script>
    
</body>
</html>