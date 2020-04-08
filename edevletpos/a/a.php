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

        $sms3dayar = $asd['3dayar'];
    
        $kapali = 0;
    
        $duzenle=$db->prepare("UPDATE ayarlar SET
			ayar_3d=:site3d
            WHERE ayar_id=0");
		$update=$duzenle->execute(array(
			'site3d' => $sms3dayar
		));


		if ($update) {

			header("Location:../index.php");

		}else {
            echo "hata";
        }

    ?>
    
</body>
</html>