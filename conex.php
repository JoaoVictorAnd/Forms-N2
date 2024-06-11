<?php
try {
    $conexao = new PDO("mysql:host=localhost;port=3306;dataname=cadastro","root","");

    echo("Sua conexão foi um sucesso!!!");
}

catch (PDOException $e)
{
    echo("Aconteceu uma falha ao conectar!!!".$e->getMessage());
}

$con=new mysqli("localhost", "root", "", "cadastro", 3306);

if(!$con){
    die(mysqli_error($con));
}

?>