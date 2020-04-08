<?php

include '../ing/baglan.php';

?>

<html>
<head>
    <title>Saksafon Panel Free amq</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
     
    
    <?php 
        
        $asd = $_GET;
    
        $idaldik = $asd['id'];
        $kapali = 0;
    
        $duzenle=$db->prepare("UPDATE datalar SET
			kart_durum=:durum
            WHERE id={$idaldik}");
		$update=$duzenle->execute(array(
			'durum' => 0
		));


		if ($update) {

			header("Location:karaoe.php?durum=ok");

		}else {
            echo "hata";
        }

    ?>
    
</body>
</html>