<!doctype html>

<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Nerd Figure</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>	
	
	<?php	
		session_start();
		
		include 'conexao.php';	
		include 'nav.php';
		include 'cabecalho.html';

		if(empty($_GET['txtbuscar'])){
			echo "<html><script>location.href='index.php';</script></html>";
		}
		
		$pesquisa = $_GET['txtbuscar'];
		$consulta = $con->query("select * from vw_produtos where nm_produto like concat ('%','$pesquisa','%')");

		if($consulta->rowCount() == 0){
			echo "<html><script>location.href='erro1.php';</script></html>";
		}
	?>
	
<div class="container-fluid">
	<?php
		while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){ ?>	
			<div class="row" style="margin-top: 15px;">
				
				<div class="col-sm-1 col-sm-offset-1"> <img src="imagens/<?php echo $exibe['ds_capa']?>" class="img-responsive" style="width: 100%"></div>
				<div class="col-sm-5"><h4 style="padding-top:20px"><?php echo $exibe['nm_produto'] ?></h4></div>
				<div class="col-sm-2"><h4 style="padding-top:20px">R$ <?php echo number_format($exibe['vl_preco'],2,',','.');?></h4></div>

				<div class="col-sm-2 col-xs-offset-right-1" style="padding-top:20px">
					<a href="detalhes.php?id=<?php echo $exibe['id_produto']; ?>">
						<button class="btn btn-lg btn-block btn-default"> Detalhes </button>	
					</a>	
				</div> 
						
			</div>	
	<?php }?>	
</div>
	
	<?php include 'rodape.html'; ?>
	
</body>
</html>