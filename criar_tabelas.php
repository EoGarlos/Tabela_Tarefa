<?php

include 'conecta.php';

// Consulta SQL para criar a tabela usuário

$sql = "CREATE TABLE tarefa (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nome_tarefa VARCHAR(50) NOT NULL , data_tarefa date NOT NULL, turno_tarefa VARCHAR(20))";


if (mysqli_query($conexao, $sql))
{
    echo "Tabela tarefa criada com sucesso";
} else
    echo "Erro ao criar a tabela: " . mysqli_error($conexao);







?>