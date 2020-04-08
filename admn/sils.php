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
	$sil = mysql_query("delete from ykbsms where id='$id'") or die("Hata Olustu!");
	if($sil) {
	echo "$id Numaralı Kayıt Başarıyla Silinmiştir.<br><br><a href='index.php'>Geri Dön</a>";
	}
	?>
	</div>
	</div>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>