<?php
include_once "conex.php";

try {
    $email = $_POST['email'];
    $rg = $_POST['rg'];
    $sql=$conexao->query("SELECT * FROM usuarios WHERE email='$email' AND rg='$rg' ");

    if ($sql->rowCount()>0)
        {
          $consult=$conexao->query("SELECT * FROM pdo.usuarios");
          
          echo "<table border='1' style='border: 1px black solid;border-collapse: collapse;'>
                    <tr>
                        <td>Email</td>
                        <td>Endereço</td>
                        <td>Cidade</td>
                        <td>Estado</td>
                        <td>Cep</td>
                        <td>Ação</td>
                    </tr>";  
          while ($line=$consult->fetch(PDO::FETCH_ASSOC))
          {
              echo "<tr><td>$line[email]</td>
                        <td>$line[endereco]</td>
                        <td>$line[cidade]</td>
                        <td>$line[estado]</td>
                        <td>$line[cep]</td>
                        <td><a href='excluir.php?$line[email]'>Excluir</a></td></tr>";
          }
          echo "</table>";
          
        }    
    else
    {
        echo "<script>window.location.href='login.html';alert('Usuário não cadastrado!');</script>";   
            
    }
 } catch (PDOException $e) {
     echo ("Erro: ". $e->getMessage());
 }


?>