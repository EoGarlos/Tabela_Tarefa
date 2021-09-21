<?php
include 'conecta.php';

if(isset($_POST['nome']))
{

    $nomeT = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $data  = mysqli_real_escape_string($conexao, trim($_POST['data']));
    $turno = mysqli_real_escape_string($conexao, trim($_POST['turno']));



    $sql = "UPDATE tarefa SET nome_tarefa = '$nomeT', data_tarefa = '$data', turno_tarefa = '$turno' WHERE id = '$_GET[id]'";
    


    if (mysqli_query($conexao, $sql))
    {
        echo "<script>
                alert('Tarefa Atualizada com Sucesso!');
                window.location.href='../Lista_tarefas.php';
                </script>";
    } else
    {  
         echo "<script>
                alert('Erro ao Atualizada Tarefa!');
                window.location.href='../Lista_tarefas.php';
              </script>";
    }
}


?>