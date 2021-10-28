<?php

use Pessoa as GlobalPessoa;

class Pessoa {

    public $nome = "Rasmos Lerdorf"; // Acessa em qualquer lugar.
    protected $idade = 48;// Só acessa dentro da propria classe ou quem herda.
    private $senha = "123456"; // Só acessa dentro da propria classe.

    public function verDados(){
        echo $this->nome . "\n";
        echo $this->idade . "\n";
        echo $this->senha . "\n";
    }
}

class Programador extends Pessoa{

    public function verDados(){

        echo get_class($this). "\n";

        echo $this->nome . "\n";
        echo $this->idade . "\n";
        echo $this->senha . "\n"; // Private Senha não definida pois só acessa dentro da propria classe.
    }

}


$objeto = new Programador();
$objeto->verDados();// Chamando os dados dentro da classe.
echo $objeto->nome . " Public <br/>";// Chamando publico


?>