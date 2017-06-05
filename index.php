<?php 
require_once "model/user.php";

$usuario = new User();
$user = $usuario->all();
/*
foreach ($user as $key => $value) {
	$teste = $user[$key];
	echo ($teste['nome']);
	echo '<br>';
}*/

// $find = $usuario->destroy("nome = 'rogerio'");

var_dump($find);



?>