<!doctype html>

<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Minha Loja</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<style>
	
	.navbar{
		margin-bottom: 0;
	}
	
	
	</style>
	
	
	
</head>

<body>	
	
	<?php
	
	session_start();

	include 'conexao.php';	
	include 'nav.php';

    $id_Usuario = $_SESSION['id'];

    $consultaVenda = $con->query("select * from vwVenda where id_cliente = '$id_Usuario'");
  

	?>
	
<div class="container-fluid">
	
	
	<div class="row" style="margin-top: 15px;">
		
		<div class="col-sm-1 col-sm-offset-1"> Código da Compra </div>
		<div class="col-sm-2"> Produto </div>
		<div class="col-sm-5"> Unidades </div>
		<div class="col-sm-1"> Data da Compra </div>
		<div class="col-sm-2"> Preço </div>
				
	</div>		

    <?php while($exibevenda = $consultaVenda->fetch(PDO::FETCH_ASSOC)) { ?>
	
        <div class="row" style="margin-top: 15px;">
            <div class="col-sm-1 col-sm-offset-1"> <?php echo $exibevenda['no_ticket']; ?></div>
            <div class="col-sm-2"> <?php echo $exibevenda['nm_produto']; ?> </div>
            <div class="col-sm-5"> <?php echo $exibevenda['qt_itens']; ?> </div>
            <div class="col-sm-1"> <?php echo $exibevenda['dt_venda']; ?> </div>
            <div class="col-sm-2"><?php echo $exibevenda['vl_total_item']; ?> </div>	
        </div>	
	
    <?php } ?>

</div>
	
	<?php
	
	include 'rodape.html';
	
	?>
	
</body>
</html>