<?php
//Banco de dados = cadastro
//Tabela = usuarios
// id INT AUTO_INCREMENT PRIMARY KEY.
//nome: Até 100 caracteres (VARCHAR).
// sexo: Um dos valores 'Masculino', 'Feminino' ou 'Nenhum' (ENUM).
// genero: Um dos valores 'Masculino_2', 'Feminino_2', 'Outros' ou 'Nenhum' (ENUM).
// rg: Até 20 caracteres (VARCHAR).
// cns: Até 15 caracteres (VARCHAR).
// data_nasc Formato de data (DATE).
// telefone: Até 20 caracteres (VARCHAR).
// nome_mae: Até 100 caracteres (VARCHAR).
// cep: Até 9 caracteres (VARCHAR).
// endereço: Até 200 caracteres (VARCHAR).
// numero: Até 5 caracteres (VARCHAR).
// complemento: Até 10 caracteres (VARCHAR).
// bairro: Até 100 caracteres (VARCHAR).
// cidade: Até 100 caracteres (VARCHAR).
// estado: Até 2 caracteres (VARCHAR).
// email: Até 100 caracteres (VARCHAR).
// doenças: Um dos valores 'nenhuma', 'nefrite', 'conjutivite', 'rinite', 'asma' ou 'tendinite' (ENUM).

include_once "conex.php";
try {
    $nome=$_POST["nome"];
    $sexo=isset($_POST['sexo']) ? $_POST['sexo'] : null;
    $genero=isset($_POST['genero']) ? $_POST['genero'] : null;
    $rg=$_POST["rg"];
    $cns=$_POST["cns"];
    $data_nasc=$_POST["data_nasc"];
    $telefone=$_POST["telefone"];
    $nome_mae=$_POST["nome_mae"];
    $cep=$_POST["cep"];
    $endereco=$_POST["endereco"];
    $numero=$_POST["numero"];
    $complemento=$_POST["complemento"];
    $bairro=$_POST["bairro"];
    $cidade=$_POST["cidade"];
    $estado=$_POST["estado"];
    $email=$_POST["email"];
    $doenca=$_POST["doenca"];

    $sql=$conexao->prepare("USE cadastro;INSERT INTO usuarios (nome, sexo, genero, rg, cns, data_nasc, telefone, nome_mae, cep, endereco, numero, complemento, bairro, cidade, estado, email, doenca)
    values ('$nome','$sexo','$genero','$rg','$cns', '$data_nasc','$telefone', '$nome_mae', '$cep', '$endereco', '$numero', '$complemento', '$bairro', '$cidade', '$estado', '$email', '$doenca')");  

    $sql->execute();
    header("location: index.html?status=success");

}
catch (PDOException $e)
{
    echo("Falha no registro".$e->getMessage());
}


?>

<!--
// switch(@$_REQUEST["page"]){
//     case "novo":
//         include("novo-usuario.php");
//     break;
//     case "listar":
//         include("listar-usuario.php");
//         break;
//         default;
//             print "Seu cadastro foi um sucesso"
// }
?> -->