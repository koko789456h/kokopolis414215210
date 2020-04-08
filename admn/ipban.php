<?php
session_start();
header("Cache-control:private");

if($_SESSION['logged'] != "1") {
    header("location:giris.php");
    die(); }
	?>
<?php
include("sifre.php");
?>
<?php 
include("baglan.php");
$id = $_GET["id"];

if($_GET['ipbanla']<>""){
$ip = $_GET['ipbanla'];

mysql_query("insert into ip (ip) values ( '$ip')");
echo "<script>window.location.href='index.php';</script>";

}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<title>Yönetim Paneli</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	.table {
		margin-bottom: 0px;
	}
	</style>
</head>
<body>
	<div class="container">
	<br>
	<div class="well">
	<?php 
	$sil = mysql_query("delete from datalar where id='$id'") or die("Hata Olustu!");
	if($sil) {
	echo "<script>alert('$id Numaralı Kayıt Başarıyla Silinmiştir.');</script>";
	echo "<script>window.location.href='index.php';</script>";
	}
	?>
	</div>
	</div>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>