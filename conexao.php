<?php

$dsn = "mysql:host=localhost;dbname=exemplo; port=3307";
$username = "root";
$password = "";
$pdo = new PDO($dsn, $username, $password);


$stmt = $pdo->query("SELECT * FROM usuario");
while ($dados = $stmt->fetch()) {
    echo $dados['nome'] . " - " . $dados['senha'] . "<br>";
}
?>
