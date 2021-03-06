<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce website</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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

    <div class="small-container">
        <div class="row row-2">
            <h2>All Products</h2>
            <select name="" id="">
                <option value="">Default Sorting</option>
                <option value="">Price Low to High</option>
                <option value="">Price High to Low</option>
                <option value="">By Popularity</option>
                <option value="">By Rating</option>
                <option value="">By Sale</option>
            </select>
        </div>

        <div class="row row-pro">
            <?php
                    include 'database.php';
                    if(isset($_POST['submit'])){
                        $proName = "%".$_POST['proName']."%";
                        $sql = "SELECT * FROM product WHERE ProductName LIKE '$proName'";
                    }
                    if(isset($_GET['cid'])){
                        $id = $_GET['cid'];
                        switch($id){
                            case 'ao': $sql = "SELECT * FROM product as p INNER JOIN category as c ON p.CateID = c.CateID WHERE c.Description LIKE 'ao%'";
                            break;
                            case 'quan': $sql = "SELECT * FROM product as p INNER JOIN category as c ON p.CateID = c.CateID WHERE c.Description LIKE 'quan%'";
                            break;
                            case 'phukien': $sql = "SELECT * FROM product as p INNER JOIN category as c ON p.CateID = c.CateID WHERE c.Description LIKE 'phụ%'";
                            break;
                            case 'giay': $sql = "SELECT * FROM product as p INNER JOIN category as c ON p.CateID = c.CateID WHERE c.Description LIKE 'giay%'";
                            break;
                            default: $sql = "SELECT * FROM product WHERE CateID = $id";
                            break;
                        }
                    }
                    $product = $dbh -> query($sql);
                    foreach($product as $p){
                        $img = explode(',', $p['Picture']);
                        echo '<div class="col-4">
                        <a href="product-detail.php?pid='.$p['ProductID'].'">
                            <img src="images/'.$img[0].'" alt="">
                        </a>
                        <a href="product-detail.php?pid='.$p['ProductID'].'">
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
        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>5</span>
            <span>&#8594</span>
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
        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px"){
                MenuItems.style.maxHeight = "200px";
            }
            else{
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>

</body>
</html>
