<?php
////////////////////////////////////
//Tipos Básicos                   //
////////////////////////////////////
//String, int, float, boolean.

$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;
////////////////////////////////////
// Tipo composto                  //
////////////////////////////////////
$frutas = array("abacaxi", "laranja", "manga");
echo $frutas[2]; // indice 2 - manga
echo "<br>";
echo "<br>";

// toda vez que chamar (new) é um OO
$nascimento = new DateTime();
// var_dump($nascimento);

/////////////////////////////////////
//Tipos Especiais                  //
/////////////////////////////////////

$arquivo = fopen("exemplo-01.php", "r");
//var_dump($arquivo);

$nulo = NULL; // não possui valor, não existe;
$valor = ""; // Vazio, porém iniciada variavel.

?>