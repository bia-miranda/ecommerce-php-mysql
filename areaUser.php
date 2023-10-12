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
	.table{
		margin-top: 10rem;
		margin-bottom: 10rem;
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
	
	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Produto</th>
      <th scope="col">Itens</th>
      <th scope="col">Código da Compra</th>
      <th scope="col">Data da Compra</th>
      <th scope="col">Preço</th>
    </tr>
  </thead>
  <tbody>

  <?php while($exibevenda = $consultaVenda->fetch(PDO::FETCH_ASSOC)) { ?>
    <tr>
      <th scope="row"><img src="imagens/<?php echo $exibevenda['ds_capa']?>" style="width: 4.5vw"></th>
      <td> <?php echo $exibevenda['nm_produto']; ?> </td>
      <td> <?php echo $exibevenda['qt_itens']; ?> </td>
      <td><?php echo $exibevenda['no_ticket']; ?></td>
      <td> <?php echo date ('d/m/Y', strtotime( $exibevenda['dt_venda'])); ?> </td>
      <td> <?php echo number_format($exibevenda['vl_total_item'],2,',','.'); ?></td>
    </tr>

	<?php } ?>


  </tbody>
</table>
	
	<?php
	
	include 'rodape.html';
	
	?>
	
</body>
</html>