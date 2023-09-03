<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
</head>
<body>
    <?php
 
 include 'conexao.php';
 $consulta = $con->query('select * from vw_produtos');

 while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){
    echo $exibe['nm_produto'].'<br/>';
    echo $exibe['vl_preco']."<br/> ";
    echo $exibe['ds_categoria']."<br/> ";
    echo "<hr/>";
 }


 
 ?>
</body>
</html>