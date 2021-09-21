<?php

    $conexao = mysqli_connect("localhost", "root", "");
    
    // Verifica se conseguiu a conexão
    
    if (!$conexao)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Consulta sql que irá criar banco de dados
    
    $sql = "CREATE DATABASE Teste";
    if (mysqli_query($conexao, $sql)) {
        echo "Base de dados criada com sucesso";
    } else {
        echo "Erro ao criar a base de dados: " . mysqli_error($conexao);
    }
    mysqli_close($conexao);
?>