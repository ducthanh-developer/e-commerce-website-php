<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce website</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="navbar">
             <div class="logo">
                 <a href="index.php">   
                    <img src="images/logo.png" alt="" width="125px">
                 </a>
             </div>
             <nav>
                 <ul id="MenuItems">
                     <li><a href="index.php">Home</a></li>
                     <li><a href="products.php">Products</a></li>
                     <li><a href="">About us</a></li>
                     <li><a href="">Contacts</a></li>
                     <li><a href="account.php">Accounts</a></li>
                 </ul>
             </nav>
             <a href="cart.php">
                 <img src="images/cart.png" alt="" width="30px" height="25px">
             </a>
             <img src="images/menu.png" alt="" class="menu-icon" onclick="menutoggle()">
         </div>
    </div>

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="images/gall1.jpg" alt="" width="100%" id="ProductImg">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images/gall1.jpg" alt="" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gall2.jpg" alt="" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gall3.jpg" alt="" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gall4.jpg" alt="" width="100%" class="small-img">
                    </div>
                </div>

            </div>
            <div class="col-2">
                <p>Home / Hoodie</p>
                <h1>Lanvia Hoodie by Yame</h1>
                <h4>Ym.4523</h4>
                <select name="" id="">
                    <option value="">Select Size</option>
                    <option value="">XXL</option>
                    <option value="">XL</option>
                    <option value="">L</option>
                    <option value="">M</option>
                    <option value="">S</option>
                </select>
                <input type="number" name="" id="" value="1">
                <a href="" class="btn">Add to Cart</a>
                <h3>Products Detail <i class="fa fa-indent"></i></h3>
                <br>
                <p>The Kaval collection is the new uniform for the street. These purpose-driven pieces merge form and
                    function. This pullover hoodie is made in the USA of heavyweight cotton French terry. The fabric
                    feels smooth on the outside, with a soft brushed surface on the inside.</p>
            </div>
        </div>
    </div>

    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <p>View More</p>
        </div>
    </div>

    <div class="small-container">
        <div class="row">
            <div class="col-4">
                <img src="images/pro1.jpg" alt="">
                <h4>Hoodie SweatShirt by Yame</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Ym.3421</p>
            </div>
            <div class="col-4">
                <img src="images/pro2.jpg" alt="">
                <h4>Hoodie SweatShirt by Yame</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Ym.3421</p>
            </div>
            <div class="col-4">
                <img src="images/pro3.jpg" alt="">
                <h4>Hoodie SweatShirt by Yame</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>Ym.3421</p>
            </div>
            <div class="col-4">
                <img src="images/pro4.jpg" alt="">
                <h4>Hoodie SweatShirt by Yame</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Ym.3421</p>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download own App</h3>
                    <p>Download App for Android and IOS mobile phone</p>
                    <div class="app-logo">
                        <img src="images/google-play.png" alt="">
                        <img src="images/apps_store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/logo.png" alt="">
                    <p>Our purpose is to give the best quality product to the customer and bring then back and make them
                        happy</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affliiate</li>
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
            <p class="copyright">Copyright &copy; 2020 - www.4men.com</p>
        </div>
    </div>

    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            }
            else {
                MenuItems.style.maxHeight = "0px";
            }
        }

        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("small-img");

        SmallImg[0].onclick = function () {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function () {
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function () {
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function () {
            ProductImg.src = SmallImg[3].src;
        }

    </script>

</body>

</html>