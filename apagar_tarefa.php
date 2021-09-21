<?php
    include 'conecta.php';

    if(isset($_GET['id']))
    {
        $sql = "Delete FROM tarefa WHERE id='$_GET[id]'";

        if (mysqli_query($conexao, $sql))
        {
            echo "<script>
                    alert('Tarefa apagada com Sucesso');
                    window.location.href='../Lista_tarefas.php';
                </script>";
        } else
        {  
            echo "<script>
                alert('Erro ao Apagar a tarefa');
                window.location.href='../Lista_tarefas.php';
            </script>";
        }
        mysqli_close($conexao);
    }









?>