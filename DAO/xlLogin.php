<?php

	include_once '../BUS/AccBUS.php';
	include_once '../DTO/AccDTO.php';
	
	$user = $_REQUEST["username"];
	$pass = $_REQUEST["password"];
	
	$AccBUS = new AccBUS();
	$AccDTO = new AccDTO();
	$AccDTO->Setname($user);
	$AccDTO->Setpassword($pass);
	$AccBUS->xlLogin($AccDTO);

?>
