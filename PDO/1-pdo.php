<?php 
//PDO Melhor maneira de se usar para conectar a banco de dados
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stat = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stat->execute();

$results = $stat->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    foreach($row as $key =>$value){
        echo "<strong>".$key. "</strong>".$value. "<br/>";
    }

    echo "=============================================<br/>";
}

?>