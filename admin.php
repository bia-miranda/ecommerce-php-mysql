<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Administrativo</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	
	<?php
	
		session_start();

		if(empty($_SESSION['Status']) || $_SESSION['Status'] != 1 )
		{
			header('location: index.php');
		}
		
		include 'conexao.php';	
		include 'nav.php';
	
	?>
	
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4 text-center">		
				<h2>Área administrativa</h2>
				
				
				<a href="formProduto.php">			
					<button type="submit" class="btn btn-block btn-lg btn-primary">
						Incluir Produto
					</button>			
				</a>

				<br>
                
				<a href="lista.php">
					<button type="submit" class="btn btn-block btn-lg btn-warning">
						Alterar / Excluir Produto
					</button>
                </a>

				<br>
				
				<button type="submit" class="btn btn-block btn-lg btn-success">
					Vendas
				</button>
						
				<br>

				<button type="submit" class="btn btn-block btn-lg btn-danger">
					Sair da área administrativa
				</button>
				
			</div>
		</div>
	</div>
	
	<?php include 'rodape.html' ?>
	
</body>
</html>