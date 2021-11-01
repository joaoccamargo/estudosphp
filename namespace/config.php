<?php 
// AUTOLOAD PARA USAR COM NAMESPACE

spl_autoload_register(function($nameClass){
    $nameClass = str_replace('\\', '/', $nameClass);
    //var_dump($nameClass);
    $dirClass = "class";
    $fileName = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

    if (file_exists($fileName)) {
        require_once($fileName);
    }else {
        echo "Erro 404 - Contate o suporte do sistema.";
    }
});



?>