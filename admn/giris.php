<?php
session_start();
include('sifre.php');
if($_GET['op'] == "logout") {
    $_SESSION['logged'] = "0"; 
    echo "��k�� yap�ld�"; }
if($_GET['op'] == "login") {
 if($_POST['sifre'] != "$sifre") {
    echo "Hatal� bir �ifre girdiniz!"; }
 else {
    $_SESSION['logged'] = "1";
// giri� ba�ar�l� ise y�nlendirilecek sayfa
    header('location:index.php'); }
}
if ($_SESSION['logged'] != "1") {
echo '<h1>Y�netim Paneli</h1><form action="?op=login" method="POST">
<input type="password" name="sifre"><br><br><input type="submit" value="Giri� Yap">
</form>'; }

?>