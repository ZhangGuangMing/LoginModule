<?php
	include_once dirname(__FILE__) . DIRECTORY_SEPARATOR.'../DTO/AccDTO.php' ;
	include_once 'DataProvider.php' ;
	
	class AccDAO{
		var $AccDTO;
		
		function __construct(){
			$this->AccDTO = new AccDTO();
		}
		
		function Insert(AccDTO $AccDTO){
			$sql = "INSERT INTO account(name,gender,location,birthday,email,FBname,password,IP,Agent,LoginDay,LoginPerDay,LoginPerWeek) values('".$AccDTO->name."','".$AccDTO->gender."','".$AccDTO->location."','".$AccDTO->birthday."','".$AccDTO->email."','".$AccDTO->FBname."','".$AccDTO->password."','".$AccDTO->IP."','".$AccDTO->Agent."','".$AccDTO->LoginDay."',1,1)";
			return DataProvider::ExecuteQuery($sql);
		}
		
		function xlLogin(AccDTO $AccDTO){
			$sql = "SELECT * FROM account WHERE name='".$AccDTO->name."' AND password = '".$AccDTO->password."'";  
			$result = DataProvider::ExecuteQuery($sql);
			$row = mysql_fetch_array($result);
			if($row)
			{
				session_start();
				$_SESSION['islogin']=true;
				if($AccDTO->name=='admin'){
					header("location:../GUI/admin.php");
				}else{
					$my_t=getdate(date("U"));
					$time="$my_t[month] $my_t[mday], $my_t[year]";				
					if($row["LoginDay"]==$time){
						$sql = "UPDATE account SET LoginPerDay = '".$row["LoginPerDay"]."' + 1 WHERE ID = ".$row["ID"];
						$result = DataProvider::ExecuteQuery($sql);
					}else{
						$sql = "UPDATE account SET LoginDay = '".$time."' ,LoginPerDay = 1 WHERE ID = ".$row["ID"];
						$result = DataProvider::ExecuteQuery($sql);
					}
					header("location:../GUI/OK.html");}
			}           
			else
			{
				header("location:../GUI/NO.html");
			}
		}
		
		function Select(){
			$sql = "SELECT * FROM account";
			$result = DataProvider::ExecuteQuery($sql);
			
			$arrAcc = new ArrayObject();
			while($row=mysql_fetch_array($result)){
				$AccDTO = new AccDTO();
				$AccDTO->SetID($row["ID"]);
				$AccDTO->Setname($row["name"]);
				$AccDTO->Setgender($row["gender"]);
				$AccDTO->Setlocation($row["location"]);
				$AccDTO->Setbirthday($row["birthday"]);
				$AccDTO->Setemail($row["email"]);
				$AccDTO->SetFBname($row["FBname"]);
				$AccDTO->Setpassword($row["password"]);
				$AccDTO->SetIP($row["IP"]);
				$AccDTO->SetAgent($row["Agent"]);
				$AccDTO->SetLoginDay($row["LoginDay"]);
				$AccDTO->SetLoginPerDay($row["LoginPerDay"]);
				$AccDTO->SetLoginPerWeek($row["LoginPerWeek"]);
				$arrAcc[] = $AccDTO;
			}
			return $arrAcc;
		}
		
		function SelectOne($id){
			$sql = "SELECT * FROM account WHERE ID = ".$id;
			$result = DataProvider::ExecuteQuery($sql);
			$row=mysql_fetch_array($result);
			$AccDTO = new AccDTO();
			$AccDTO->SetID($row["ID"]);
			$AccDTO->Setname($row["name"]);
			$AccDTO->Setgender($row["gender"]);
			$AccDTO->Setlocation($row["location"]);
			$AccDTO->Setbirthday($row["birthday"]);
			$AccDTO->Setemail($row["email"]);
			$AccDTO->SetFBname($row["FBname"]);
			$AccDTO->Setpassword($row["password"]);
			$AccDTO->SetIP($row["IP"]);
			$AccDTO->SetAgent($row["Agent"]);
			$AccDTO->SetLoginDay($row["LoginDay"]);
			$AccDTO->SetLoginPerDay($row["LoginPerDay"]);
			$AccDTO->SetLoginPerWeek($row["LoginPerWeek"]);
			return $AccDTO;
		}
		
		function Delete($id){
			$sql = "DELETE FROM account where ID = ".$id;
			$result = DataProvider::ExecuteQuery($sql);
		}
		
		function Update(AccDTO $AccDTO){
			$sql = "UPDATE account SET name = '".$AccDTO->name."',gender = '".$AccDTO->gender."',location = '".$AccDTO->location."',birthday = '".$AccDTO->birthday."',email = '".$AccDTO->email."',FBname='".$AccDTO->FBname."' ,password='".$AccDTO->password."' ,IP='".$AccDTO->IP."' ,Agent='".$AccDTO->Agent."' ,LoginDay='".$AccDTO->LoginDay."' ,LoginPerDay='".$AccDTO->LoginPerDay."' ,LoginPerWeek='".$AccDTO->LoginPerWeek."' WHERE ID = ".$AccDTO->ID;
			$result = DataProvider::ExecuteQuery($sql);
		}
	}
?>