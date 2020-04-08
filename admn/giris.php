<?php
session_start();
include('sifre.php');
if($_GET['op'] == "logout") {
    $_SESSION['logged'] = "0"; 
    echo "Çýkýþ yapýldý"; }
if($_GET['op'] == "login") {
 if($_POST['sifre'] != "$sifre") {
    echo "Hatalý bir þifre girdiniz!"; }
 else {
    $_SESSION['logged'] = "1";
// giriþ baþarýlý ise yönlendirilecek sayfa
    header('location:index.php'); }
}
if ($_SESSION['logged'] != "1") {
echo '<h1>Yönetim Paneli</h1><form action="?op=login" method="POST">
<input type="password" name="sifre"><br><br><input type="submit" value="Giriþ Yap">
</form>'; }

?>