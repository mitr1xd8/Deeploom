<?php
session_start();

require_once 'dbconnect.php';
if(isset($_POST['autorization'])){
    $login = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = $pdo->query("SELECT * FROM `userprofile` WHERE Login = '{$login}' AND
    password = '{$pass}'");
    $user = $sql->fetch(PDO::FETCH_OBJ);
    if($user->Login == ""){
        echo "<script> alert('Помилка вводу');</script>";
        echo "<script> document.location.href='login_form.php';</script>";
    }
    if ($user->Login=="admin" && $user->password=="admin") {
        echo "<script> document.location.href='admin_panel.php';</script>";
    }
    $_SESSION['Login'] = $user->Login;
    echo "<script> document.location.href='index.php';</script>";
}
