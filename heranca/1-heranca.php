<?php 

class Documento {

    private $numero;

    public function getNumero(){

        return $this->numero;
    }

    public function setNumero($n){

        $this->numero = $n;

    }

}

// Herança
class CPF extends Documento { 

    public function validar():bool{
        
        $numeroCPF = $this->getNumero();
        
        // Validação do CPF
        return true;
    }

}

$doc = new CPF();
$doc->setNumero('33445567889-66');
$doc->validar();
var_dump($doc->validar());
echo "\n";
echo $doc->getNumero();
?>