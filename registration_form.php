<?php
require_once 'dbconnect.php';
 require_once 'parts/header.php';?>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <div class="container">
                <form action="function.php" method="POST">
                        <div class="container">
                          <h1>Регістрація</h1>
                          <hr>

                          <label for="email"><b>Email</b></label>
                          <input type="text" placeholder="Введіть Email" name="email" required><br>

                          <label for="name"><b>Логін</b></label>
                          <input type="text" placeholder="Введіть Логін" name="name" required><br>

                          <label for="nick"><b>Nickname</b></label>
                          <input type="text" placeholder="Введіть nickname" name="nick" required><br>

                          <label for="psw"><b>Пароль</b></label>
                          <input type="password" placeholder="Введіть пароль" name="psw" required><br>

                          <hr>

                          <button type="submit" name="sing_in" class="registerbtn">Регістрація</button>
                        </div>

                        <div class="container signin">
                          <p>Вже маєте аккаунт? <a href="login_form.php">Вхід</a>.</p>
                        </div>
                      </form>
        </div>
</body>
</html>
