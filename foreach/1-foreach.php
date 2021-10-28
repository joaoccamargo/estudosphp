<?php 
//O Foreach É utilizado para array
// E coleções  
$meses = array(
    "Janeiro", "Fevereiro", "Março",
    "Abril", "Maio", "Junho", "Julho",
    "Agosto", "Outubro", "Novembro",
    "Dezembro"
);

foreach ($meses as $index => $mes) {
    
    echo "Indice: " . $index. "O mês é " . $mes . "\n";
}


?>