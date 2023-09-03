<?php

include 'conexao.php';

session_start();

$Vemail = $_POST['txtemail'];
$Vsenha = $_POST['txtsenha'];

echo $Vemail, $Vsenha;

$consulta = $con->query("select id, nm_usuario, ds_email, ds_senha, ds_status from tbl_usuario where ds_email = '$Vemail' and ds_senha = '$Vsenha';");

if($consulta->rowCount() == 1){
    $exibeUsuario = $consulta->fetch(PDO::FETCH_ASSOC); 
    $_SESSION['id'] = $exibeUsuario['id'];
    header('location:index.php'); 
}
else{
    header('location:erro.php');
}
?>