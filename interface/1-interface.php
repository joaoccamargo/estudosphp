<?php 

interface Veiculo {
    public function acerelar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

class Civic implements Veiculo {

    public function acerelar($velocidade)
    {
       echo "O veiculo acelerou até " . $velocidade . "Km/h";  
    }

    public function frenar($velocidade)
    {
        echo "O veiculo frenou " . $velocidade . "Km/h";
    }

    public function trocarMarcha($marcha)
    {
        echo "O veiculo trocou a macha para ". $marcha;
    }
}

$carro = new Civic();

$carro->acerelar(1);
echo "\n";
$carro->frenar(5);
echo "\n";
$carro->trocarMarcha(2);


?>