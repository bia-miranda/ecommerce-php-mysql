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
        .info{
            margin-top: 15rem;
            /*display: flex;
            flex-direction: column;
            position: center;
            height: 100vh;
            justify-content: center;*/
        }
        h2{
            color: green;
        }
	</style>
</head>

<body>	
	
	<?php	
	session_start();
	
	include 'conexao.php';	
	include 'nav.php';

    if(!empty($_GET['id'])){
        $id_prod = $_GET['id'];
        $consulta = $con->query("select * from vw_produtos where id_produto = '$id_prod'");
        $exibir = $consulta->fetch(PDO::FETCH_ASSOC);
    }else{
        header('location:index.php');
    }

   

	?>
	
<div class="container-fluid">
	
	<div class="row">
		
		 <div class="col-md-4 col-sm-offset-1">
			 
			 
			 <img src="imagens/<?php echo $exibir['ds_capa']; ?>" class="img-responsive" style="width:100%;">
		
				<div class="col-sm-4 col-sm-offset-1" style="margin-top: 10px;"><img src="https://placehold.it/900x640" class="img-responsive"></div>
				<div class="col-sm-4 col-sm-offset-1" style="margin-top: 10px;"><img src="https://placehold.it/900x640" class="img-responsive"></div>
			
		</div>
					
 		 <div class="info col-sm-7 position-absolute top-50 start-50 translate-middle">

                <h1><b><?php echo $exibir['nm_produto']; ?></b></h1>

                <h5>Frete grátis para todo o Brasil.</h5>
                <h5><b>Estoque: </b><?php echo $exibir['qt_estoque']?></h5>

                <hr/>
                
                <h2><b> R$ <?php echo number_format($exibir['vl_preco'],2,',','.');?> </b></h2>
                            
                <button class="btn btn-lg btn-success">Adicionar ao carrinho</button>

                <h3>Detalhes do Produto</h3>

                <h4><?php echo $exibir['ds_prod']; ?></h4>
				
		</div>		

</div>
	
	<?php include 'rodape.html';?>
	
</body>
</html>