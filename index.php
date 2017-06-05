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

$find = $user->find(12);

var_dump($find);



?>