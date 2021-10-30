<?php 

session_start();

$_SESSION["nome"] = "Hcode";

session_unset(); //Limpa variaveis de sessão;
session_destroy(); // Limpa variaveis e remove usuario;
?>