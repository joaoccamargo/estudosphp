<?php 

$conn = new mysqli("127.0.0.1", "root", "", "dbphp7");

if($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
    exit;
}

$stat = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

$stat->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

$stat->execute();

//$login = "user2";
//$pass = "12345";

//$stat->execute();

?>