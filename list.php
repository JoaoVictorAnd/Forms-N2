<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Lista de Usuários</h1>
<?php
include_once "conex.php";

try {

    $sql="SELECT * FROM usuarios";
    $res = mysqli_query($conexao, $sql);
    

    if (mysqli_num_rows($res) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Nome</th>";
        echo "<th>Sexo</th>";
        echo "<th>Gênero</th>";
        echo "<th>R.G.</th>";
        echo "<th>CNS</th>";
        echo "<th>Data de Nascimento</th>";
        echo "<th>Telefone</th>";
        echo "<th>Nome da Mãe</th>";
        echo "<th>CEP</th>";
        echo "<th>Endereço</th>";
        echo "<th>Número</th>";
        echo "<th>Complemento</th>";
        echo "<th>Bairro</th>";
        echo "<th>Cidade</th>";
        echo "<th>Estado</th>";
        echo "<th>E-mail</th>";
        echo "<th>Doença</th>";
        echo "<tr>";
        while ($row = mysqli_fetch_assoc($res)) {
            echo "<tr>";
            echo "<td>".$row[id]."</td>";
            echo "<td>".$row[nome]."</td>";
            echo "<td>".$row[sexo]."</td>";
            echo "<td>".$row[genero]."</td>";
            echo "<td>".$row[rg]."</td>";
            echo "<td>".$row[cns]."</td>";
            echo "<td>".$row[data_nasc]."</td>";
            echo "<td>".$row[telefone]."</td>";
            echo "<td>".$row[nome_mae]."</td>";
            echo "<td>".$row[cep]."</td>";
            echo "<td>".$row[endereco]."</td>";
            echo "<td>".$row[numero]."</td>";
            echo "<td>".$row[complemento]."</td>";
            echo "<td>".$row[bairro]."</td>";
            echo "<td>".$row[cidade]."</td>";
            echo "<td>".$row[estado]."</td>";
            echo "<td>".$row[email]."</td>";
            echo "<td>".$row[doenca]."</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    } else
        echo "Nenhum registro encontrado.";
    
}catch (PDOException $e) {
    echo ("Erro: ". $e->getMessage());
}
?>

</body>
</html>