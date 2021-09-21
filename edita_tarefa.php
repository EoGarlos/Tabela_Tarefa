<?php
     include 'conecta.php';

     if(isset($_GET['id'])){

     $sql = "SELECT id, nome_tarefa, data_tarefa, turno_tarefa FROM tarefa WHERE tarefa.id = '$_GET[id]'";
     $tarefa = mysqli_fetch_assoc(mysqli_query($conexao, $sql));
     
  
                    
     
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Lista</title>
</head>
<body>
        <div class="container">
        <h1>Editar Tarefa</h1>
        <?php echo "<form  method='POST' action='../atualizar_tarefa.php/?id=$tarefa[id]'>"?>
           
        <div class="form-group">
                <label>Nome da Tarefa:</label>
                <?php echo "<input type='text' class='form-control'  value ='$tarefa[nome_tarefa]' name='nome' required><br>"?>            
            </div>

            <div class="form-group">
                <label> Data:</label>
                <?php echo "<input type='date' class='form-control'  value ='$tarefa[data_tarefa]' name='data' required><br>"?>            
            </div>

            <div class="form-group">
                <label> Turno:</label>
                <?php echo "<input type='text' class='form-control'  value ='$tarefa[turno_tarefa]' name='turno' required><br>"?>            
            </div>
 
            <button type="submit"  class="btn btn-primary">Atualizar a Tarefa</button><br><br>

        </form>
        <a href="Lista_tarefas.php">
            <button type="submit" class="btn btn-primary">Voltar a Lista de Tarefas</button>
        </a>
</div>
</body>
</html>
<?php
        mysqli_close($conexao);
    }

     ?>