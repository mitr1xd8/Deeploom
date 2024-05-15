<?php
require_once 'dbconnect.php';
$auto = $pdo->query("select * from product");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="admin_panel.css">
</head>
<body>
<h1>Товари</h1>
<a href="index.php">На основний сайт</a>
    <?php
    echo "<table class='table table-bordered'>";
    while ($riw = $auto->fetch(PDO::FETCH_LAZY)){
        echo"<tr>"?>
        <form action="function.php" method="post">
            <?php echo "
            <td><input class='inp' type='text' name='Idproduct' value='{$riw['Idproduct']}'></td>
            <td><input class='inp' type='text' name='NameProduct' value='{$riw['NameProduct']}'></td>
            <td><input class='inp' type='text' name='Description' value='{$riw['Description']}'></td>
            <td><input class='inp' type='text' name='Price' value='{$riw['Price']}'></td>
            <td><input class='inp' type='text' name='Photo' value='{$riw['Photo']}'></td>
            <td><input class='inp' type='text' name='IsNew' value='{$riw['IsNew']}'></td>
            <td><input class='inp' type='text' name='Категорія' value='{$riw['Category']}'></td>
            <td><button class='inp' name='change' type='submit'>Редагувати</button></td>
            <td><button class='inp' name='del' type='submit'>Видалити</button></td>
            </tr>
            ";?>
        </form>
    <?php
    }
    echo"</table>";
    ?>
    <form  method="post" action="function.php">
        <input type="text" name="nameadm" placeholder="Введість Назву товара">
        <input type="text" name="Description" placeholder="Введість Опис товара">
        <input type="text" name="Price" placeholder="Введість ціну">
        <input type="text" name="Photo" placeholder="Введість Фото">
        <input type="text" name="IsNew" placeholder="Чи новий товар?">
        <input type="text" name="Category" placeholder="Категорія">
        <button name="insert" type="submit">Додати</button>
    </form>
<h1>Замовлення</h1>
<form  method="post" action="function.php">
<input type="text" name="got" placeholder="Номер замовлення">
<button name="status" type="submit">Змінити статус</button>
  </form>
    <?php
    echo "<table class='table table-bordered'>";
    $del = $pdo->query("select * from delivery inner join cart_order on delivery.IdDel=cart_order.Id_delivery left join cart on cart.IdProduct=cart_order.Id_product left join product on product.Idproduct=cart_order.Id_product");

    while ($row = $del->fetch(PDO::FETCH_LAZY)){
       ?>
        <form action="function.php" method="post">
            <?php
			echo"<tr>";
            echo "
            <td><input class='inp' type='text'  value='{$row['IdDel']}'></td>
            <td><input class='inp' type='text'  value='{$row['Fio']}'></td>
            <td><input class='inp' type='text'  value='{$row['Birthday']}'></td>
            <td><input class='inp' type='text'  value='{$row['City']}'></td>
            <td><input class='inp' type='text'  value='{$row['Address']}'></td>
            <td><input class='inp' type='text'  value='{$row['Phone']}'></td>
            <td><input class='inp' type='text'  value='{$row['Email']}'></td>
			<td>";
							echo $row['NameProduct']; echo "<br>";
							 echo $row['sizec']; echo "<br>";
							echo $row['countc'];

			echo "</td>
             <tr>";
				?>
        </form>
    <?php
  }
    echo"</table>";
    ?>
</body>
</html>
