<?php
require_once 'dbconnect.php';

  if(isset($_POST['insert'])){
      $sql =  "insert into product(NameProduct,Description,Price,Photo,IsNew)
       value ('{$_POST['NameProduct']}', '{$_POST['Description']}', '{$_POST['Price']}', '{$_POST['Photo']}', '{$_POST['IsNew']}')";
      echo $sql;
      $stm = $pdo->prepare($sql);
      $stm ->execute($value);
      echo "<script>location='admin_panel.php'</script>";
  }

  if(isset($_POST['del'])){
      $sql =  "DELETE FROM `product` WHERE `product`.`IdProduct` = {$_POST['Idproduct']}";
      echo $sql;
      $stm = $pdo->prepare($sql);
      $stm ->execute($value);
      echo "<script>location='admin_panel.php'</script>";
  }

  if(isset($_POST['change'])){
      $sql =  "UPDATE `product` SET `NameProduct` = '{$_POST[NameProduct]}', `Description` = '{$_POST[Description]}'
      , `Price` = {$_POST[Price]}, `Photo` = '{$_POST[Photo]}', `IsNew` = {$_POST[IsNew]}  WHERE `Idproduct` = {$_POST['Idproduct']}";
      echo $sql;
      $stm = $pdo->prepare($sql);
      $stm ->execute($value);
      echo "<script>location='admin_panel.php'</script>";
  }

if(isset($_POST['add'])){
    $sql = "insert into cart(IdProduct,size,count) values({$_POST['id']},'{$_POST['size']}',{$_POST['count']})";
    echo $sql;
    $stm = $pdo->prepare($sql);
    $stm ->execute($value);
    echo "<script>location='cart.php'</script>";
}


if(isset($_POST['status'])){
    $got =  $_POST['got'];
    $sql = "DELETE FROM delivery WHERE IdDel = {$got}";
    $stm = $pdo->prepare($sql);
    $stm ->execute($value);
    echo "<script>location='admin_panel.php'</script>";
}echo "";


echo $_GET['cart_delete'];
if(isset($_GET['cart_delete'])){
    $sql = "DELETE FROM cart WHERE IdProduct = {$_GET['cart_delete']}";
    $stm = $pdo->prepare($sql);
    $stm ->execute($value);
    echo "<script>location='cart.php'</script>";
}echo "";

if(isset($_POST['sing_in'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $nick = $_POST['nick'];
    $pass = $_POST['psw'];
    $sql = 'insert into userprofile(Login,password,Email,nickname) values(:name,:pass,
    :email,:nick)';
    $query = $pdo->prepare($sql);
    $query->execute(array(':name' => $name,':pass' => $pass
    ,':email' => $email,':nick' => $nick));
    echo "<script> document.location.href='index.php';</script>";
}
if(isset($_POST['check'])){
    $fio1 = $_POST['fio'];
    $birthday1 = $_POST['birthday'];
    $city1 = $_POST['city'];
    $address1 = $_POST['address'];
    $phone1 = $_POST['phone'];
    $email1 = $_POST['email'];
    $sql = "insert into delivery(Fio,Birthday,City,Address,Phone,Email) values(:fio,:birthday,:city,:address,:phone,:email)";
    echo $sql;
    $query = $pdo->prepare($sql);
    $query->execute(array(':fio' => $fio1,':birthday' => $birthday1,':city' => $city1,':address' => $address1,':phone' => $phone1,':email' => $email1));

	$stm = $pdo->query("select * from delivery ORDER BY IdDel DESC LIMIT 1");
	$rowDelivery = $stm->fetch(PDO::FETCH_OBJ);
	$stmproduct = $pdo->query("select * from cart");
	while($rowproduct = $stmproduct->fetch(PDO::FETCH_OBJ)){
		$sql = "insert into cart_order(Id_delivery,Id_product,sizec,countc) values({$rowDelivery->IdDel},{$rowproduct->IdProduct},'{$rowproduct->size}',{$rowproduct->count})";
		$query = $pdo->prepare($sql);
		$query->execute();
	}
	$sql="update delivery set Id_product = $rowDelivery->IdDel WHERE IdDel = $rowDelivery->IdDel";
	$query = $pdo->prepare($sql);
	$query->execute();
    echo "<script> document.location.href='index.php';</script>";
}
