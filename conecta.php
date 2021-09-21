<?php

    // Cria a conexão com o banco de dados
    $conexao = mysqli_connect("localhost", "root", "", "teste");

    // Verifica se conseguiu a conexão
    if (!$conexao)
    {
        die("Falha na conexão com o banco: " . mysqli_connect_error());
    }
?>