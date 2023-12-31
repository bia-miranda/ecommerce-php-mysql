<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NerdFigure</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- ESTILIZAÇÃO INTERNA -->
    <style type="text/css">
      span{
        font-family: helvetica ;
      }
        .navbar{
            margin-bottom: 0;
            padding: 1rem;
            border-radius: 0; 
        }
    </style>
</head>
<body>
  <?php 
  
        session_start();
        include 'conexao.php';
        include 'nav.php';
        include 'cabecalho.html';
        

        $consulta = $con->query('select id_produto, nm_produto, ds_capa, vl_preco, qt_estoque from vw_produtos');
   ?>

        <div class="container-fluid">
          <div class="row">
           <?php while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){ ?>
            <div class="col-sm-3">
              <img src="imagens/<?php echo $exibe['ds_capa']?>" class="img-responsive" style="width: 100%">
              <div><h3><?php echo mb_strimwidth($exibe['nm_produto'], 0, 30, '...');?></h3></div>
              <div><h4>R$ <?php echo number_format($exibe['vl_preco'],2,',','.');?></h4></div>

              <div class="text-center">
              <?php if($exibe['qt_estoque']>0){ ?>
                <a href="carrinho.php?id=<?php echo $exibe['id_produto']; ?>">
                    <button class="btn btn-lg btn-block btn-success">
                    <span> Comprar</span>
                    </button>
              </a>
             <?php }  else{ ?>
                  <button class="btn btn-lg btn-block btn-danger" disabled  >
                  <span> Indisponível</span>
                  </button>
                <?php } ?>
                
                <div class="text-center" style="margin-top: 0.5rem; margin-bottom: 0.5rem;">
                  <a href="detalhes.php?id=<?php echo $exibe['id_produto']; ?>">
                    <button class="btn btn-lg btn-block btn-default">
                      <span style="color: cadetblue;"> Detalhes</span>
                    </button>
                  </a>
              </div>
                
              </div>

            </div>
         <?php } ?>
          </div>
        </div>


        <?php include 'rodape.html'; ?>
</body>
</html>
