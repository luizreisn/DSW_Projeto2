<?php
    include_once('../modelo/conexao.php');
    include_once('../modelo/contatoDAO.php');

    $conexao = new Conexao();
    $conn = $conexao ->conectar();
    $contatoDAO = new ContatoDAO();
    if(isset($_GET['flag'])){
        $contatoDAO -> listar($conn);
    }
?>