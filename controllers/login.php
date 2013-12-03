<?php
include '../pass.php';
$value = $_GET["v"];

//get ip for guess checking
$ip = $_SERVER['REMOTE_ADDR'];
if ($value == $loginPass){
	include '../views/home.php';
}
else {
	include '../views/login.php';
}