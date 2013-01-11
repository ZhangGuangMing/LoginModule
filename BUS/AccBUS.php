<?php
	include_once dirname(__FILE__) . DIRECTORY_SEPARATOR.'../DTO/AccDTO.php' ;
	include_once dirname(__FILE__) . DIRECTORY_SEPARATOR.'../DAO/AccDAO.php' ;
	
	class  AccBUS{
		var $AccDAO;
		
		function __construct(){
			$this->AccDAO = new AccDAO();
		}
		
		function Select(){
			return $this->AccDAO->Select();
		}
		
		function Insert(AccDTO $acc){
			return $this->AccDAO->Insert($acc);
		}
		
		function Delete($id){
			return $this->AccDAO->Delete($id);
		}
		
		function SelectOne($id){
			return $this->AccDAO->SelectOne($id);
		}
		
		function Update(AccDTO $show){
			return $this->AccDAO->Update($show);
		}
	}
?>