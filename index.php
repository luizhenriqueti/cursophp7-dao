<?php 

require_once("config.php");

//$root = new Usuario();

//carrega 1 usuario
//$root->loadById(3);
//echo $root;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);


//carrega 1 lista de usuarios buscando pelo login
//$busca = Usuario::search("i");
//echo json_encode($busca);

//carrega 1 usuario usando login e a senha
//$usuario = new Usuario();
//$usuario->login("Root","123456"); 
//echo $usuario;

//insert de novo usuario
//$aluno = new Usuario();
//$aluno->setDeslogin("aluno2");
//$aluno->setDessenha("@lun0");
//$aluno->insert();
//echo $aluno;

/*
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor","!@#$%¨&*");
echo $usuario;*/

$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;