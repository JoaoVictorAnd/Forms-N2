<?php
include_once "conex.php";

try {
    $nome=$_POST['nome'];
    $sexo=isset($_POST['sexo']) ? $_POST['sexo'] : null;
    $genero=isset($_POST['genero']) ? $_POST['genero'] : null;
    $rg=$_POST['rg'];
    $cns=$_POST['cns'];
    $data_nasc=$_POST['data_nasc'];
    $telefone=$_POST['telefone'];
    $nome_mae=$_POST['nome_mae'];
    $cep=$_POST['cep'];
    $endereco=$_POST['endereco'];
    $numero=$_POST['numero'];
    $complemento=$_POST['complemento'];
    $bairro=$_POST['bairro'];
    $cidade=$_POST['cidade'];
    $estado=$_POST['estado'];
    $email=$_POST['email'];
    $doenca=$_POST['doenca'];

    $sql=$conexao->prepare("USE cadastro; INSERT INTO pdo.usuarios (nome, sexo, genero, rg, cns, data_nasc, telefone, nome_mae, cep, endereco, numero, complemento, bairro, cidade, estado, email, doenca) VALUES ('$nome', '$sexo', '$genero', '$rg' '$cns', '$data_nasc'; '$telefone', '$nome_mae', '$cep', '$endereco', '$numero', '$complemento', '$bairro', '$cidade', '$estado', '$email', '$doenca')");

    $sql->execute():
    header("location: index.html");
} catch (PDOException $e) {
    echo ("Erro ". $e-getMessage());
}
    
?>