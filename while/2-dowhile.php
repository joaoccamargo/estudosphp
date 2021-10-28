<?php 
// Lembre-se de colocar um contador se não fica executando infinitamente
$total = 150;
$desconto = 0.9; // desconto de 10%

do {
    $total *= $desconto;

} while($total > 100);

echo $total;

?>