<?php 

require_once "model.php";

class Car extends Model{


	function __construct(){
		$this->table = "carros";
		$this->attributes = array();
	}
}
?>