<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products-CloudySlice</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
</head>
<body>
<div class="header">
    <div class="container">
    <div class="navbar">
        <div class="logo">
            <img src="img/images/logo.png" width="125px">
        </div>
        <nav>
        <ul id="menu-items">
            <li><a href="">Home</a></li>
            <li><a href="">Products</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Account</a></li>
        </ul>
        </nav>
        <img src="img/images/cart.png" width="30px" height="30px">
        <img src="img/images/menu.png" class="menu-icon" onclick="menutoggle()">
    </div>

</div>
</div>
{{$slot}}
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download our App</h3>
                <p>Download App for Android and ios mobile phone</p>
                <div class="app-logo">
                    <img src="img/images/play-store.png">
                    <img src="img/images/app-store.png">
                </div>
            </div>
            <div class="footer-col-2">
               <img src="img/images/logo-white.png">
                <p>Our purpose is To sustainably make the pleasure <br>and Benefits of sports Accessible to the Many.</p>

            </div>
            <div class="footer-col-3">
                <h3>Useful links</h3>
               <ul>
                   <li>Coupons</li>
                   <li>Blog Post</li>
                   <li>Return Policy</li>
                   <li>Join Affiliate</li>
               </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow Us</h3>
               <ul>
                   <li>Facebook</li>
                   <li>Twitter</li>
                   <li>Instagram</li>
                   <li>Youtube</li>
               </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">
            Copyright 2022 -Cloudy Enterprise
        </p>
    </div>
</div>
<!-- js toggle menu -->
<Script>
    let MenuItems=document.getElementById('menu-items');
    MenuItems.style.maxHeight="0px";
    function menutoggle(){
        if(MenuItems.style.maxHeight=="0px"){
            MenuItems.style.maxHeight="200px";
        }else{
            MenuItems.style.maxHeight="0";
        }
    }

</Script>



</body>
</html>
