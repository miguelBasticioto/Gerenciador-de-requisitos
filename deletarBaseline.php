<?php
    include "connection.php";

    if ($conexao->connect_error) {
        die("Connection failed: " . $conexao->connect_error);
    } 

    $id = $_GET['id'];

    $sql = "DELETE FROM baseline WHERE id = $id";
    
    if ($conexao->query($sql) === TRUE) {
        //Cadastrou com sucesso, levar pra tela de listagem
        header("Location: http://localhost/GerenciadorRequisitos/listagemBaselines.php");
    } else {
        //Mensagem de erro do sql
        echo "Error: " . $sql . "<br>" . $conexao->error;
    }
  
    $conexao -> close();
?>