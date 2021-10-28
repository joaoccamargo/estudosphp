<?php 
//Declaração de tipos escalares
//New Features
function soma(int ...$valores):float{

    return array_sum($valores);
}

echo var_dump (soma(2,2));
echo "\n";
echo soma(25,33);
echo "\n";
echo var_dump (soma(1.5,2.8));

?>