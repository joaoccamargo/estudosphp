<?php 

interface Veiculo {
    public function acerelar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo {

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
 
class DelRay extends Automovel {

    public function empurrar(){

    }


}

//$carro= new Automovel();
$carro = new DelRay(); // Instancia Carro
$carro->acerelar(200); // Acelerou 200KM

?>