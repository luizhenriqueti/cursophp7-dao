<?php

require_once("config.php");

$usuario = new Usuario();
$usuario->login("jose", "qwer1234");

echo $usuario;
?>
