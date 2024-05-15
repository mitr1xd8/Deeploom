<?php
$host = "localhost";
$db = "aga";
$charset = "utf8";
$user = "root";
$pass = "";
$dsn = "mysql:host=localhost;dbname=aga";
$opt = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);
$pdo = new PDO($dsn,$user,$pass,$opt);

$result = $pdo->query("select * from product");
?>
