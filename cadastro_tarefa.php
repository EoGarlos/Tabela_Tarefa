<?php

include 'conecta.php';

if(isset($_POST['nome_tarefa']))
{
    $nomeT = mysqli_real_escape_string($conexao, trim($_POST['nome_tarefa']));
    $data  = mysqli_real_escape_string($conexao, trim($_POST['data']));
    $turno = mysqli_real_escape_string($conexao, trim($_POST['turno']));
 

    $sql = "INSERT INTO tarefa (nome_tarefa, data_tarefa, turno_tarefa)
    VALUES ('$nomeT','$data','$turno')";


    if (mysqli_query($conexao, $sql))
    {
        echo "<script>
                alert('Cadastro Realizado com Sucesso');
                window.location.href='Lista_tarefas.php';
            </script>";
    } else
    {  
        echo "Erro: " . $sql . "<br>" . mysqli_error($conexao);
    }
    mysqli_close($conexao);
}


?>