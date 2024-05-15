<?php require_once 'parts/header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-datepicker.css">


</head>
<body>
        <div class="container login mt-5">
                <form action="autorization.php" method="POST">
                        <div class="container">
                          <h1>Вхід</h1>
                          <hr>

                          <label for="login"><b>Логін</b></label>
                          <input type="text" placeholder="Введіть Логін" name="email" required><br>

                          <label for="pass"><b>Пароль</b></label>
                          <input type="password" placeholder="Введіть пароль" name="pass" required><br>

                          <button type="submit" name="autorization" class="registerbtn">Вхід</button>
                        </div>

                        <div class="container signin">
                          <p>Не маєте аккаунту? <a href="registration_form.php">Регістрація</a>.</p>
                        </div>
                      </form>
        </div>
</body>
</html>
