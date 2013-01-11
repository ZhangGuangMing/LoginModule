<?php
	include_once dirname(__FILE__) . DIRECTORY_SEPARATOR.'../DTO/AccDTO.php' ;
	include_once 'DataProvider.php' ;
	
	class AccDAO{
		var $AccDTO;
		
		function __construct(){
			$this->AccDTO = new AccDTO();
		}
		
		function Insert(AccDTO $AccDTO){
			$sql = "INSERT INTO account(name,gender,location,birthday,email,FBname,password) values('".$AccDTO->name."','".$AccDTO->gender."','".$AccDTO->location."','".$AccDTO->birthday."','".$AccDTO->email."','".$AccDTO->FBname."','".$AccDTO->password."')";
			return DataProvider::ExecuteQuery($sql);
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
			return $AccDTO;
		}
		
		function Delete($id){
			$sql = "DELETE FROM account where ID = ".$id;
			$result = DataProvider::ExecuteQuery($sql);
		}
		
		function Update(AccDTO $AccDTO){
			$sql = "UPDATE account SET name = '".$AccDTO->name."',gender = '".$AccDTO->gender."',location = '".$AccDTO->location."',birthday = '".$AccDTO->birthday."',email = '".$AccDTO->email."',FBname='".$AccDTO->FBname."' ,password='".$AccDTO->password."' WHERE ID = ".$AccDTO->ID;
			$result = DataProvider::ExecuteQuery($sql);
		}
	}
?>