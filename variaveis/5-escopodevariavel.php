<?php 
//Escopo de Variável
//Global faz com que entenda variaveis globais

$nome = "João";

function teste(){
    //$nome = "Jaiminho";
    global $nome; //pega variavel global
    echo $nome;
    echo "<br>";

}

function teste2(){
    $nome = "Carlos ";
    echo $nome . "Agora no teste 2";
}

teste(); // Chama function
teste2();

?>