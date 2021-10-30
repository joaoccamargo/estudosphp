
<?php 

session_start();

session_regenerate_id(); // gera um novo ID de sessão.


echo session_id();

var_dump($_SESSION);


?>