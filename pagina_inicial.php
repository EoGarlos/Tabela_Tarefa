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
        <h1>Cadastrar Tarefa</h1>
        <form  method="POST" action="cadastro_tarefa.php">
           
        <div class="form-group">
                <label>Nome da Tarefa:</label>
                <input type="text" class="form-control" name="nome_tarefa" required><br>
            </div>

            <div class="form-group">
                <label> Data:</label>
                <input type="date" class="form-control"  name="data" required><br>
            </div>

            <div class="form-group">
                <label> Turno:</label>
                <input type="text" class="form-control"  name="turno" required><br>
            </div>

            <button type="submit" class="btn btn-primary">Inserir a Tarefa</button><br><br>

        </form>
        <a href="Lista_tarefas.php">
            <button type="submit" class="btn btn-primary">Voltar a Lista de Tarefas</button>
        </a>
</div>
</body>
</html>