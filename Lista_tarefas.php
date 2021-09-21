<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>Lista</title>
</head>
<body>
        <div class="container">
             <h1 class="text-center">Lista de Tarefas</h1>
             <a href="pagina_inicial.php">
             <i class='bx bx-add-to-queue'></i>Adicionar nova Tarefa</a>
        </div> 
        <div class="container">
        <br>
        <h2>Listagem das tarefas Cadastradas</h2>
        <table class="table table-hover table-striped">
            <thead>
                <tr>   
                    <th>Nome da tarefa</th> 
                    <th>Data da tarefa</th> 
                    <th>Turno da tarefa</th> 
                    <th>Editar</th> 
                    <th>Apagar</th> 
                </tr>
            </theand> 
<tbody>
       <?php
            include 'conecta.php';
            
            
            $sql = "SELECT id, nome_tarefa, data_tarefa, turno_tarefa FROM tarefa";
            if (!mysqli_query($conexao, $sql)) {
                echo "Erro: " . $sql . "<br>" . mysqli_error($conexao);
            } else {
                  
            
            $resposta = mysqli_query($conexao,$sql);


           
            while ($row = mysqli_fetch_assoc($resposta))
            {
                echo  mysqli_error($conexao);

                echo "<tr>";
                echo "<td> $row[nome_tarefa] </td>";
                echo "<td> $row[data_tarefa] </td>";
                echo "<td> $row[turno_tarefa] </td>";
                echo "<td><a href='edita_tarefa.php/?id=$row[id]'>
                <i class='bx bx-edit' ></i>
                </a></td>";
                echo "<td><a href='apagar_tarefa.php/?id=$row[id]'>
                <i class='bx bx-box' ></i>
                </a></td>";
                echo "</tr>"; 
            }
        }
       ?>
       </tbody>
        </table>
</div>
</body>
</html>
