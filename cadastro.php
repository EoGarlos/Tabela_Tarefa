<?php
include 'conecta.php';

if(isset($_POST['turno']))
{
    $nomeT = mysqli_real_escape_string($conexao, trim($_POST['nome_tarefa']));
    $data  = mysqli_real_escape_string($conexao, trim($_POST['data']));
    $turno = mysqli_real_escape_string($conexao, trim($_POST['turno']));
 

    $sql = "INSERT INTO tarefa (nome_tarefa, data_tarefa, turno_tarefa)
    VALUES ('$nomeT','$data','$turno')";


    if (mysqli_query($conexao, $sql))
    {
        echo "<script>
                alert('Tarefa cadastrada com Sucesso!');
                window.location.href='pagina_inicial.php';
            </script>";
    } else
    {  
         echo "<script>
                alert('Erro ao cadastrar Tarefa!');
                window.location.href='pagina_inicial.php';
           </script>";
    }
}


?>