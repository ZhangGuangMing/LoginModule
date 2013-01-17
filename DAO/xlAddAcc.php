<?php

	include_once '../BUS/AccBUS.php';
	include_once '../DTO/AccDTO.php';
	
	$name = $_REQUEST["name"];
	$gender = $_REQUEST["gender"];
	$location = $_REQUEST["location"];
	
	$day = $_REQUEST["day"];
	$mon = $_REQUEST["mon"];
	$year = $_REQUEST["year"];
	$birthday = $year ."-".$mon."-". $day;
	
	$email = $_REQUEST["email"];
	$FBname = $_REQUEST["FBname"];
	$password = $_REQUEST["password"];
	
	$agent=$_SERVER['HTTP_USER_AGENT'];
	$ip=$_SERVER['REMOTE_ADDR'];
	$my_t=getdate(date("U"));
	$time="$my_t[month] $my_t[mday], $my_t[year]";
	
	$AccBUS = new AccBUS();
	$AccDTO = new AccDTO();
	$AccDTO->Setname($name);
	$AccDTO->Setgender($gender);
	$AccDTO->Setlocation($location);
	$AccDTO->Setbirthday($birthday);
	$AccDTO->Setemail($email);
	$AccDTO->SetFBname($FBname);
	$AccDTO->Setpassword($password);
	$AccDTO->SetIP($ip);
	$AccDTO->SetAgent($agent);
	$AccDTO->SetLoginDay($time);
	$AccBUS->Insert($AccDTO);
	header("location:../index.php");

?>