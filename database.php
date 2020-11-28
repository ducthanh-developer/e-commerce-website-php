<?php 
    $host = 'localhost';
    $dbname = 'flydb';
    $user = 'root';
    $pass = '';
    $opt = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $dbh = new PDO('mysql:host='.$host.';dbname='.$dbname,$user, $pass,$opt);
?>