<?php 

require_once "model.php";

	/**
	* 
	*/
	class User extends Model{


		function __construct(){
			$this->table = "users";
			$this->attributes = ["nome","idade","cpf"];
		}
	}



?>