<?php
include '../pass.php';
$value = $_GET["v"];
print_r($value);
//get ip for guess checking
$ip = $_SERVER['REMOTE_ADDR'];
if ($value == $loginPass){
	print_r($ip);
	include '../views/home.php';
}
else {
	include '../views/login.php';
}