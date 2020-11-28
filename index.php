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
    <div class="header">
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
            <div class="row">
                <div class="col-2">
                    <h1>Change your lens, <br>Change your Story</h1>
                    <p>When words becomes unclear, I shall focus with photographs.<br>When Images becomes inadequate. I
                        shall be content with silence</p>
                    <a href="" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images/camera.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images/category1.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="images/category2.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="images/category3.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <?php
                    include 'database.php';
                    $sql = "SELECT * FROM product";
                    $product = $dbh -> query($sql);
                    for($i = 0; $i < 4; $i++){
                        $p = $product -> fetch(PDO::FETCH_ASSOC);
                        $img = explode(',', $p['Picture']);
                        echo '<div class="col-4">
                        <a href="product-detail.php?pid='.$p['ProductID'].'">
                            <img src="images/'.$img[0].'" alt="">
                        </a>
                        <a href="product-detail.php">
                            <h4>'.$p['ProductName'].'</h4>
                        </a>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p>'.$p['Price'].'</p>
                    </div>';
                    }
                ?>
        </div>
        <h2 class="title">Lasted Products</h2>
        <div class="row">
            <?php
                        $sql = "SELECT * FROM product";
                        $product = $dbh -> query($sql);
                        for($i = 0; $i < 4; $i++){
                            $p = $product -> fetch(PDO::FETCH_ASSOC);
                            $img = explode(',', $p['Picture']);
                            echo '<div class="col-4">
                            <a href="product-detail.php?pid='.$p['ProductID'].'">
                                <img src="images/'.$img[0].'" alt="">
                            </a>
                            <a href="product-detail.php">
                                <h4>'.$p['ProductName'].'</h4>
                            </a>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <p>'.$p['Price'].'</p>
                        </div>';
                        }
                    ?>
        </div>
        <div class="row">
            <?php
                    $sql = "SELECT * FROM product LIMIT 4,8";
                    $product = $dbh -> query($sql);
                    for($i = 0; $i < 4; $i++){
                        $p = $product -> fetch(PDO::FETCH_ASSOC);
                        $img = explode(',', $p['Picture']);
                        echo '<div class="col-4">
                        <a href="product-detail.php?pid='.$p['ProductID'].'">
                            <img src="images/'.$img[0].'" alt="">
                        </a>
                        <a href="product-detail.php">
                            <h4>'.$p['ProductName'].'</h4>
                        </a>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p>'.$p['Price'].'</p>
                    </div>';
                    }
                ?>
        </div>
        <div class="row">
            <?php
                    $sql = "SELECT * FROM product LIMIT 8,12";
                    $product = $dbh -> query($sql);
                    for($i = 0; $i < 4; $i++){
                        $p = $product -> fetch(PDO::FETCH_ASSOC);
                        $img = explode(',', $p['Picture']);
                        echo '<div class="col-4">
                        <a href="product-detail.php?pid='.$p['ProductID'].'">
                            <img src="images/'.$img[0].'" alt="">
                        </a>
                        <a href="product-detail.php">
                            <h4>'.$p['ProductName'].'</h4>
                        </a>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p>'.$p['Price'].'</p>
                    </div>';
                    }
                ?>
        </div>
    </div>

    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/shopping.png" alt="" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusively Available on Thegioididong</p>
                    <h1>Apple watch series S6 LITE</h1>
                    <small>
                        Apple Watch Series 6. The future of health is on your wrist. Measure your blood oxygen level
                        with a revolutionary new sensor and app. Take an ECG anytime, ...
                    </small>
                    <a href="" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum odit nam error temporibus quo
                        harum unde eos fugit quia mollitia perferendis vitae quas fugiat, ut nihil quasi ullam molestias
                        eligendi?</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <img src="images/user-1.jpg" alt="">
                    <h3>Albert John</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum odit nam error temporibus quo
                        harum unde eos fugit quia mollitia perferendis vitae quas fugiat, ut nihil quasi ullam molestias
                        eligendi?</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <img src="images/user-2.jpg" alt="">
                    <h3>Daniel Keyler</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum odit nam error temporibus quo
                        harum unde eos fugit quia mollitia perferendis vitae quas fugiat, ut nihil quasi ullam molestias
                        eligendi?</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <img src="images/user-3.jpg" alt="">
                    <h3>Haley Miler</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/logo1.png" alt="">
                </div>
                <div class="col-5">
                    <img src="images/logo2.svg" alt="">
                </div>
                <div class="col-5">
                    <img src="images/logo3.png" alt="">
                </div>
                <div class="col-5">
                    <img src="images/logo4.png" alt="">
                </div>
                <div class="col-5">
                    <img src="images/logo5.png" alt="">
                </div>
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
    </script>

</body>

</html>