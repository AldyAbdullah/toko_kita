<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "db_toko";

try{
     $pdo = new PDO("mysql:host=$servername;dbname=db_toko", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("tidak berhasil" .$e->getMessage());
}

?>
