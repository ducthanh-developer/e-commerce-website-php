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
                        <li class="dropdown">
                            <a href="#">Products</a>
                            <ul class="menu-area">
                                <ul>
                                    <h4><a href="products.php?cid=ao">ÁO NAM</a></h4>
                                    <?php
                                        include 'database.php';
                                        $sql = "SELECT * FROM category WHERE Description LIKE 'áo%'";
                                        $category = $dbh -> query($sql);
                                        foreach($category as $cate){
                                            echo '<li><a href="products.php?cid='.$cate['CateID'].'">'.$cate['CategoryName'].'</a></li>';
                                        }
                                    ?>
                                </ul>
                                <ul>
                                    <h4><a href="products.php?cid=quan">QUẦN NAM</a></h4>
                                    <?php
                                        $sql = "SELECT * FROM category WHERE Description LIKE 'quần%'";
                                        $category = $dbh -> query($sql);
                                        foreach($category as $cate){
                                            echo '<li><a href="products.php?cid='.$cate['CateID'].'">'.$cate['CategoryName'].'</a></li>';
                                        }
                                    ?>
                                </ul>
                                <ul>
                                    <h4><a href="products.php?cid=phukien">PHỤ KIỆN</a></h4>
                                    <?php
                                        $sql = "SELECT * FROM category WHERE Description LIKE 'phụ%'";
                                        $category = $dbh -> query($sql);
                                        foreach($category as $cate){
                                            echo '<li><a href="products.php?cid='.$cate['CateID'].'">'.$cate['CategoryName'].'</a></li>';
                                        }
                                    ?>
                                </ul>
                                <ul>    
                                    <h4><a href="products.php?cid=giay">GIÀY NAM</a></h4>
                                    <?php
                                        $sql = "SELECT * FROM category WHERE Description LIKE 'giày%'";
                                        $category = $dbh -> query($sql);
                                        foreach($category as $cate){
                                            echo '<li><a href="products.php?cid='.$cate['CateID'].'">'.$cate['CategoryName'].'</a></li>';
                                        }
                                    ?>
                                </ul>
                            </ul>
                        </li>
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

    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/camera.png" alt="">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Sign Up</span>
                            <hr id="Indicator">
                        </div>
                        <form action="" id="LoginForm">
                            <input type="text" placeholder="Username">
                            <input type="password" placeholder="Password">
                            <button type="submit" class="btn">Login</button>
                            <a href="">Forgot Password</a>
                        </form>
                        <form action="" id="RegForm">
                            <input type="text" placeholder="Username">
                            <input type="email" placeholder="Email">
                            <input type="password" placeholder="Password">
                            <button type="submit" class="btn">Sign Up</button>
                        </form>
                    </div>
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

        var LoginForm = document.getElementById('LoginForm');
        var RegForm = document.getElementById('RegForm');
        var Indicator = document.getElementById('Indicator');

        function register() {
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(105%)";
        }

        function login() {
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0)";
        }
    </script>

</body>

</html>