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

$find = $usuario->find(1,"nome,idade");

var_dump($find);



?>