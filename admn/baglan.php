<?php

error_reporting(0);

try 
{
	$db=new PDO("mysql:host=localhost;dbname=sunpeek12_koko;charset=utf8",'sunpeek12_koko','KokoReis@@125');
}
catch (PDOExpception $e) 
{
	echo $e->getMessage();
}


?>
