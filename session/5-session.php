<?php 

session_start();

echo session_save_path();// qual caminho que salva sessao.


echo "</br>";

var_dump(session_status()); // verificando status da sessao


echo "</br>";

switch(session_status()) {

    case PHP_SESSION_DISABLED:
    echo "Sessões desabilitadas";
    break;

    case PHP_SESSION_NONE:
    echo "Sessões habilitadas, mas não existem";
    break;

    case PHP_SESSION_ACTIVE:
    echo "Sessões habilitadas e existem";
    break;

}

?>