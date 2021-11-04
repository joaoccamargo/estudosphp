<?php 
require_once("config.php");
/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/

/* Carrega um Usuario
$root = new Usuario();
$root->loadById(3);
echo $root;
*/

// Carrega uma Lista de Usuario
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuario usando login e senha
$usuario = new Usuario();
$usuario->login("jose", "12345678");
echo $usuario;
?>