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


?>