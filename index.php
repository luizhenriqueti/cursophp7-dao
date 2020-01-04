<?php

require_once("config.php");

$usuario = new Usuario();

$usuario->loadById(7);
$usuario->update("professor", "!@#!$!$");
echo $usuario;


?>
