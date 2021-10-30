<?php

//Passagem de parametro por referencia.

$a = 10;

function trocaValor(&$a){ // & Passagem de parametro por referencia muda o valor da variavel

    $a += 50;
    
    return $a;
}

echo trocaValor($a); // parametro da função alterado 60.
echo "\n";
echo $a; // resultado 10, não altera dentro da função se não possui &.

?>