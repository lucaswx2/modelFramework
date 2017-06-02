<?php 

require_once "C:\\xampp\htdocs\diego\db\model.php";

class Car extends Model{


	function __construct(){
		$this->table = "carros";
		$this->attributes = array();
	}
}
?>