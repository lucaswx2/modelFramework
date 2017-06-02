<?php 

require_once "C:\\xampp\htdocs\diego\db\model.php";

	/**
	* 
	*/
	class User extends Model{


		function __construct(){
			$this->table = "users";
			$this->attributes = array();
		}
	}



?>