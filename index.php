<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Loja</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- ESTILIZAÇÃO INTERNA -->
    <style type="text/css">
        .navbar{
            margin-bottom: 0;
            padding: 1rem;
            border-radius: 0; 
        }
    </style>
</head>
<body>
  <?php include 'nav.php'; ?>
  <?php include 'cabecalho.html'; ?>

        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-3">
              <img src="https://placehold.it/450x320" class="img-responsive" style="width: 100%">
              <div><h1>Nome do produto</h1></div>
              <div><h4>R$220,00</h4></div>
            </div>

            <div class="col-sm-3">
              <img src="https://placehold.it/450x320" class="img-responsive" style="width: 100%">
              <div><h1>Nome do produto</h1></div>
              <div><h4>R$220,00</h4></div>
            </div>

            <div class="col-sm-3">
              <img src="https://placehold.it/450x320" class="img-responsive" style="width: 100%">
              <div><h1>Nome do produto</h1></div>
              <div><h4>R$220,00</h4></div>
            </div>

            <div class="col-sm-3">
              <img src="https://placehold.it/450x320" class="img-responsive" style="width: 100%">
              <div><h1>Nome do produto</h1></div>
              <div><h4>R$220,00</h4></div>
            </div>

          </div>
        </div>


        <?php include 'rodape.html'; ?>
</body>
</html>
