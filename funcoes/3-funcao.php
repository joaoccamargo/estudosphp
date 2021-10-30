<?php 

function ola($texto = "Mundo", $periodo="Bom dia"){

    return "Olá $texto $periodo \n";
}

echo ola("", "");
echo ola("", "Boa noite");
echo ola("Glaucio", "Boa tarde");
echo ola("João", "");

?>