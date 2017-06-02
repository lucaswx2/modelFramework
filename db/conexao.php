<?php 
class Conexao {
    //put your code here


    // metodo construtor, define o banco host, usuario e senha
	function __construct() {

	}

	function connect() {
		require_once __DIR__."/db_config.php";
		$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE) or die(mysqli_error());
		return $con;
	}

	function executeQuery($sql) {
        //se der merda morre a pagina e diz qual foi o problema
		$query = mysqli_query($this->connect(),$sql);

		return $query;

	}

	function getConnection(){
		return $this->conexao;
	}


}


?>
