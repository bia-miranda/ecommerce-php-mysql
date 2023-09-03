<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">NerdFigure</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="lanc.php">Lançamentos</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="categorias.php?cat=Naruto">Naruto</a></li>
            <li><a href="categorias.php?cat=One Piece">One Piece</a></li>
            <li><a href="categorias.php?cat=Avangers">Avangers</a></li>
            <li><a href="categorias.php?cat=Disney">Disney</a></li>
            <li><a href="categorias.php?cat=Friends">Friends</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="O que você procura?">
        </div>
        <button type="submit" class="btn btn-default">Pesquisar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Contato</a></li>

        <?php if(empty($_SESSION['id'])) { ?>
                <li><a href="login.php"><span> Entrar</a></li>
        <?php } else {           
          $consulta_usuario = $con->query("select nm_usuario from tbl_usuario where id = $_SESSION[id] ");
          $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC); 
        ?>
            <li><a href="login.php"><span><?php echo $exibe_usuario['nm_usuario'];?> </a></li>
            <li><a href="sair.php"><span>Sair<span> </a></li>
        <?php } ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>