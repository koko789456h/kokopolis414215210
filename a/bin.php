<?php


if ($_GET['bnii']) 
{
	$albin = $_GET['bnii'];


      $kisalt = substr($albin,0,6);
      echo "<h1>".$kisalt."</h1>";

function curl($url, $var = null) {
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_TIMEOUT, 25);
    if ($var != null) {
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $var);
    }
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    return $result;
}

$curl = curl("https://lookup.binlist.net/".$albin); 
$json = json_decode($curl);
$brand = $json->brand ? $json->brand : "hata";
$cardType = $json->type ? $json->type : "hata";
$cardCategory = $json->bank ? $json->bank : "hata";


$detay = '<h1>'.$cardCategory->name.' <br>'. $brand.'</h1>';

echo $detay;
}