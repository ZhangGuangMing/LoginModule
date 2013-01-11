<?php
	class AccDTO{
		var $ID;
		var $name;
		var $gender;
		var $location;
		var $birthday;
		var $email;
		var $FBname;
		var $password;
	
		function __construct(){
			$this->ID = -1 ;
			$this->name = "";
			$this->gender = -1 ;
			$this->location = "" ;
			$this->birthday = "1-1-1" ;
			$this->email = "" ;
			$this->FBname = "" ;
			$this->password = "" ;
		}
		
		function SetID($ID){
			$this->ID=$ID;
		}
		
		function Setname($name){
			$this->name=$name;
		}
		
		function Setgender($gender){
			$this->gender=$gender;
		}
		
		function Setlocation($location){
			$this->location=$location;
		}
		
		function Setbirthday($birthday){
			$this->birthday=$birthday;
		}
		
		function Setemail($email){
			$this->email=$email;
		}				
		
		function SetFBname($FBname){
			$this->FBname=$FBname;
		}
		
		function Setpassword($password){
			$this->password=$password;
		}
		
		function GetID(){
			return $this->ID;
		}
		
		function Getname(){
			return $this->name;
		}
		
		function Getgender(){
			return $this->gender;
		}
		
		function Getlocation(){
			return $this->location;
		}
		
		function Getbirthday(){
			return $this->birthday;
		}
		
		function Getemail(){
			return $this->email;
		}
		
		function GetFBname(){
			return $this->FBname;
		}
		
		function Getpassword(){
			return $this->password;
		}
	}
?>