<?php

require_once("config.php");

$usuario = new Usuario();

$usuario->loadById(7);
$usuario->delete();
echo $usuario;


?>
