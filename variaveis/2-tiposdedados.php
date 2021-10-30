<?php 
//$nomeCompleto = "João Camargo";
$nomeInicial = "João";
$sobreNome = "Camargo";
$anoNascimento = 1996;

$nomeCompleto = $nomeInicial . " " . $sobreNome; // Concatenar . Concaternar

echo "Seja Bem vindo(a): ", $nomeCompleto;
echo "<br>";
echo "Seu ano de nascimento é: ", $anoNascimento;

// Remove variaveis
//unset($nomeCompleto);
//unset($anoNascimento);

echo "<br>..";
echo "<br>..";
echo "<br>";

// Verifica se a variavel existe.
if(isset($nomeCompleto, $anoNascimento)){
    echo "Ambas variaveis existem.";
}else{
    echo "Uma das variaveis não existe. (UNSET)";
}

?>