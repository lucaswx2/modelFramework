<?php 
require_once "model/user.php";

$usuario = new User();

$usuario->destroy("id BETWEEN 2 AND 10");







