<?php
include 'conex.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `usuarios` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Sucesso ao deletar";
    }else{
        die(mysqli_error($con));
    }

}

?>