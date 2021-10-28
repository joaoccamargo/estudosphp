<?php 


$diaDaSemana = date("w");

switch ($diaDaSemana) {

    case 0:
        echo "Sabado";
    break;

    case 1:
        echo "Domingo";
    break;

    case 2:
        echo "Segunda-Feira";
    break;
    
    case 3:
        echo "Terça-Feira";
    break;
    
    case 4:
        echo "Quarta-Feira";
    break;

    case 5:
        echo "Quinta-Feira";
    break;
    
    case 6:
        echo "Sexta-Feira";
    break;

    default:
        echo "Data inválida";
    break;
}

echo $diaDaSemana;

?>