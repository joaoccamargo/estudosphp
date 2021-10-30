<?php 
// Polimorfismo pegando da classe animal.

abstract class Animal {

    public function falar(){
        return "Som";
    }

    public function mover(){
        return "Anda";
    }
}

class Cachorro extends Animal{

    public function falar(){
        return "Late";
    }
}

$pluto = new Cachorro();
echo $pluto->falar() . "\n";
echo $pluto->mover() . "\n";

class Gato extends Animal{

    public function falar(){
        return "Miau";
    }
}

$garfield = new Gato();
echo $garfield->falar() . "\n";
echo $garfield->mover() . "\n";

class Passaro extends Animal{

    public function falar(){
        return "Pi pi pi";
    }

    public function mover(){
        return "Voa e " . parent::mover();// pegando parente (ANIMAL).
    }
}

$passarinho = new Passaro();
echo $passarinho->falar(). "\n";
echo $passarinho->mover();
?>