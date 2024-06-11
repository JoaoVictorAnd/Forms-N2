<?php
include  'conex.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pasciente</title>
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
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

    <table>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Sexo</th>
            <th scope="col">Gênero</th>
            <th scope="col">R.G.</th>
            <th scope="col">CNS</th>
            <th scope="col">Data de Nascimento</th>
            <th scope="col">Telefone</th>
            <th scope="col">Nome da Mãe</th>
            <th scope="col">CEP</th>
            <th scope="col">Endereço</th>
            <th scope="col">Número</th>
            <th scope="col">Complemento</th>
            <th scope="col">Bairro</th>
            <th scope="col">Cidade</th>
            <th scope="col">Estado</th>
            <th scope="col">Email</th>
            <th scope="col">Doença</th>
            <th scope="col">Alterar/Excluir</th>
        </tr>
    
    <tbody>
        <?php

        $sql="Select * from `usuarios`";
        $result=mysqli_query($con,$sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $nome=$row['nome'];
                $sexo=$row['sexo'];
                $genero=$row['genero'];
                $rg=$row['rg'];
                $cns=$row['cns'];
                $data_nasc=$row['data_nasc'];
                $telefone=$row['telefone'];
                $nome_mae=$row['nome_mae'];
                $cep=$row['cep'];
                $endereco=$row['endereco'];
                $numero=$row['numero'];
                $complemento=$row['complemento'];
                $bairro=$row['bairro'];
                $cidade=$row['cidade'];
                $estado=$row['estado'];
                $email=$row['email'];
                $doenca=$row['doenca'];
                echo '<tr>
                <th>'.$id.'</th>
                <td>'.$nome.'</td>
                <td>'.$sexo.'</td>
                <td>'.$genero.'</td>
                <td>'.$rg.'</td>
                <td>'.$cns.'</td>
                <td>'.$data_nasc.'</td>
                <td>'.$telefone.'</td>
                <td>'.$nome_mae.'</td>
                <td>'.$cep.'</td>
                <td>'.$endereco.'</td>
                <td>'.$numero.'</td>
                <td>'.$complemento.'</td>
                <td>'.$bairro.'</td>
                <td>'.$cidade.'</td>
                <td>'.$estado.'</td>
                <td>'.$email.'</td>
                <td>'.$doenca.'</td>
                <td>
                <button><a href="atualiza.php">Atualizar</a></button>
                <button><a href="delete.php?deleteid='.$id.'">Deletar</a></button>
                </td>
                </tr> ';
            }
            
        }

        ?>
        
    </tbody>
    </table>
    
</body>
</html>