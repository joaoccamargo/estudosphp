<?php
 
$qualSuaIdade = 120;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualSuaIdade < $idadeCrianca) {

    echo "Criança";

}else if ($qualSuaIdade < $idadeMaior){

    echo "Adolescente";
}else if ($qualSuaIdade < $idadeMelhor) {

    echo "Adulto";
} else {

    echo "Idoso";
}

echo " ";

echo ($qualSuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade"; // Podemos usar isso para condições simples.

?>