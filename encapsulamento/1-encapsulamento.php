<?php 

class Pessoa {

    public $nome = "Rasmos Lerdorf"; // Acessa em qualquer lugar.
    protected $idade = 48;// Só acessa dentro da propria classe ou quem herda.
    private $senha = "123456"; // Só acessa dentro da propria classe.

    public function verDados(){
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
    }
}

$objeto = new Pessoa();
$objeto->verDados();// Chamando os dados dentro da classe.
echo $objeto->nome . " Public <br/>";// Chamando publico


?>