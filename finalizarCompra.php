<?php
// iniciando a sessão, pois precisamos pegar o cd do usuario logado para salvar na tabela de vendas no campo cd_cliiente
    session_start();  

    include 'conexao.php';

    $data = date('Y-m-d');  // variavel que vai pegar a data do dia (ano mes dia -padrão do mysql)
    $ticket = uniqid();  // gerando um ticket com função uniqid(); 	gera um id unico    
    $id_user = $_SESSION['id'];  //recebendo o codigo do usuário logado, nesta pagina o usuario ja esta logado pois, em do carrinho de compra

    //// criando um loop para sessão carrinho q recebe o $cd e a quantidade
    foreach ($_SESSION['carrinho'] as $id => $qnt)  {
        $consulta = $con->query("SELECT vl_preco FROM tbl_produtos WHERE id_produto='$id'");
        $exibe = $consulta->fetch(PDO::FETCH_ASSOC);
        $preco = $exibe['vl_preco'];
        
        $inserir = $con->query("insert into tbl_venda(no_Ticket,id_cliente,id_produto,qt_itens,vl_item,dt_venda)
        values('$ticket','$id_user','$id','$qnt','$preco','$data')");
    }

    include 'fim.php';

?>