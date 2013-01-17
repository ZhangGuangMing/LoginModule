<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin panel</title>
</head>
<body>
	<h1>Hello Admin</h1>
<?php

	include_once '../BUS/AccBUS.php';
	include_once '../DTO/AccDTO.php';
	include_once '../DAO/AccDAO.php';
	
	$AccBUS = new AccBUS();
	$AccDTO = new AccDTO();
	$arrAccDTO = $AccBUS->Select();
	echo "<hr/>";
	for($i=0; $i < count($arrAccDTO); $i++){
		echo "<b>Name: </b>".$arrAccDTO[$i]->Getname()."<br/>";
		echo "<b>Country: </b>".$arrAccDTO[$i]->Getlocation()."<br/>";
		echo "<b>IP: </b>".$arrAccDTO[$i]->GetIP()."<br/>";
		echo "<b>Agent: </b>".$arrAccDTO[$i]->GetAgent()."<br/>";
		echo "<b>Past Day Login: </b>".$arrAccDTO[$i]->GetLoginDay()."<br/>";
		echo "<b>Today logins: </b>".$arrAccDTO[$i]->GetLoginPerDay()."<br/>";
		echo "<b>Past Week Logins: </b>".$arrAccDTO[$i]->GetLoginPerWeek()."<hr/>";
	}

?>
</body>
</html>
