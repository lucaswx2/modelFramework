<?php 
class Conexao {

	function connect() {
		require_once __DIR__."/db_config.php";
		$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE) or die(mysqli_error());
		return $con;
	}

	function executeQuery($sql) {
		$query = mysqli_query($this->connect(),$sql);
		return $query;
	}

	function getConnection(){
		return $this->conexao;
	}


}


?>





