<?php
    session_start();
    $host = 'localhost';
    $dbname = 'ecommerce';
    $user = 'root';
    $pass = '';
    $opt = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $dbh = new PDO('mysql:host='.$host.';dbname='.$dbname,$user, $pass,$opt);
    function($id){
        $id = $_GET['id'];
        $sql = "SELECT * FROM product WHERE ProductID = $id";
        $addPro = $dbh -> query($sql);
        $ap = $addPro -> fetch(PDO::FETCH_ASSOC);
        array_push();
        if(!$_SESSION['cart'])
    }
?>