<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CloudySlice</title>
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
    <div class="row">
        <div class="col-2">
            <h1>Give your work <br>a new Style!</h1>
            <p>Success isn't about greatness. It's about
                 consistency. Consistent <br>hard work gains success.
                  Greatness will come
            </p>
            <a href=""class="btn">Explore Now &#8594;</a>
        </div>
        <div class="col-2">
            <img src="img/images/image1.png">

        </div>
    </div>
</div>
</div>
<!-- featured categories -->
<div class="catogories">
<div class="small-container">
    <div class="row">
        <div class="col-3">
           <img src="img/images/category-1.jpg">
        </div>
        <div class="col-3">
            <img src="img/images/category-2.jpg">
        </div>
        <div class="col-3">
            <img src="img/images/category-3.jpg">
        </div>
    </div>
</div>
</div>
<!-- featured products -->
<div class="small-container">
    <h2 class="title">Featured Products</h2>
    <div class="row">
        <div class="col-4">
            <img src="img/images/product-1.jpg" >
            <h4>Red Printed T-shirt</h4>
            <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-o"></i>

            </div>
            <p>Ksh 2,500</p>
        </div>
        <div class="col-4">
            <img src="img/images/product-2.jpg" >
            <h4>Black  Printed Shoes</h4>
            <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-o"></i>

            </div>
            <p>Ksh 2,500</p>
        </div>
        <div class="col-4">
            <img src="img/images/product-3.jpg" >
            <h4>Gray Printed Pants</h4>
            <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-o"></i>
                <i class="fa-solid fa-star-o"></i>

            </div>
            <p>Ksh 3,500</p>
        </div>
        <div class="col-4">
            <img src="img/images/product-4.jpg" >
            <h4>Blue Printed T-shirt</h4>
            <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-o"></i>
                <i class="fa-solid fa-star-o"></i>

            </div>
            <p>Ksh 2,500</p>
        </div>

    </div>
     <h2 class="title">Latest Products</h2>
     <div class="row">
        <div class="col-4">
            <img src="img/images/product-9.jpg" >
            <h4>Red Printed T-shirt</h4>
            <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-o"></i>

            </div>
            <p>Ksh 2,500</p>
        </div>
        <div class="col-4">
            <img src="img/images/product-10.jpg" >
            <h4>Black  Printed Shoes</h4>
            <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-o"></i>

            </div>
            <p>Ksh 2,500</p>
        </div>
        <div class="col-4">
            <img src="img/images/product-11.jpg" >
            <h4>Gray Printed Pants</h4>
            <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-o"></i>
                <i class="fa-solid fa-star-o"></i>

            </div>
            <p>Ksh 3,500</p>
        </div>
        <div class="col-4">
            <img src="img/images/product-12.jpg" >
            <h4>Blue Printed T-shirt</h4>
            <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-o"></i>
                <i class="fa-solid fa-star-o"></i>

            </div>
            <p>Ksh 2,500</p>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="img/images/product-5.jpg" >
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-o"></i>

                </div>
                <p>Ksh 2,500</p>
            </div>
            <div class="col-4">
                <img src="img/images/product-6.jpg" >
                <h4>Black  Printed Shoes</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-o"></i>

                </div>
                <p>Ksh 2,500</p>
            </div>
            <div class="col-4">
                <img src="img/images/product-7.jpg" >
                <h4>Gray Printed Pants</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-o"></i>
                    <i class="fa-solid fa-star-o"></i>

                </div>
                <p>Ksh 3,500</p>
            </div>
            <div class="col-4">
                <img src="img/images/product-8.jpg" >
                <h4>Blue Printed T-shirt</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-o"></i>
                    <i class="fa-solid fa-star-o"></i>

                </div>
                <p>Ksh 2,500</p>
            </div>

        </div>

    </div>
</div>
<!-- offer -->
<div class="offer">
    <div class="small-container">
        <div class="row">
           <div class="col-2">
            <img src="img/images/exclusive.png" class="offer-img">
           </div>
           <div class="col-2">
               <p>Exclusively Avalibale on CloudySlice</p>
               <h1>Smart Ban</h1>
               <small> The mi smart band 4 features a 39.9% larger (than mi band 3) Amoled color-touch display
                   with adjustable  brightness, so evrything is clear as can be.
               </small>
               <a href="" class="btn">Buy Now &#8594;</a>
           </div>
        </div>
    </div>
</div>
<!-- testimonial -->
<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
              <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto tempora eos, asperiores cum exercitationem vitae modi harum delectus explicabo mollitia cumque officia, fugit eius quae vero inventore sint sequi recusandae.
              </p>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>

              </div>
              <img src="img/images/user-1.png" >
              <h3>Hannah Mumbi</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
              <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto tempora eos, asperiores cum exercitationem vitae modi harum delectus explicabo mollitia cumque officia, fugit eius quae vero inventore sint sequi recusandae.
              </p>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>

              </div>
              <img src="img/images/user-2.png" >
              <h3>Brian odenyi</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
              <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto tempora eos, asperiores cum exercitationem vitae modi harum delectus explicabo mollitia cumque officia, fugit eius quae vero inventore sint sequi recusandae.
              </p>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>

              </div>
              <img src="img/images/user-3.png" >
              <h3>Lewis Kendo</h3>
            </div>

        </div>
    </div>
</div>
<!-- brands -->
<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="img/images/logo-godrej.png" >
            </div>
            <div class="col-5">
                <img src="img/images/logo-coca-cola.png" >
            </div>
            <div class="col-5">
                <img src="img/images/logo-oppo.png" >
            </div>
            <div class="col-5">
                <img src="img/images/logo-philips.png" >
            </div>
            <div class="col-5">
                <img src="img/images/logo-paypal.png" >
            </div>

        </div>
    </div>
</div>
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
