<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "12345678";
    $banco = "db_ecommerce";

    $con = new PDO("mysql:host=$servidor; dbname=$banco", $usuario, $senha);

?>