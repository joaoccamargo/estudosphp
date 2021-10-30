<?php 
//INCLUDE DA ACESSO A INCLUDEPATH
//include "./inc/1-include.php";
//include_one ""; TRAGA SOMENTE UMA VEZ

//REQUIRE, OBRIGA QUE O ARQUIVO EXISTA 
//QUE ESTEJA FUNCIONANDO CORRETAMENTE
//require "./inc/1-include.php";//TRAGA SOMENTE UMA VEZ
require_once "./inc/1-include.php";

$resultado = soma(10, 20);

echo $resultado;

?>