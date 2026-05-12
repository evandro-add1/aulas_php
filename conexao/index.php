<?php

$dsn = "mysql:host=localhost;dbname=dbe; port=3307";
$username = "root";
$password = "";
$pdo = new PDO($dsn, $username, $password);

$resultado = $pdo->query("select * from usuario");

if ($resultado->rowCount()>0){
    while($usuario = $resultado->fetch()){
        echo "<pre>";
        var_dump($usuario);
        echo "ID: ". $usuario["id"]. "<br>";
        echo "Usuario: ". $usuario["usuario"]. "<br>";
        echo "Senha: **** ";
    }
}
else {
    echo "Sem dados para exibição.";
    echo "";

}
?>
