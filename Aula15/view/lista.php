<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
</head>
<body>

    <?php require_once "header.php";?>
    <h1>Lista de Tarefas</h1>

    <?php

        session_start();
        //echo var_dump($_SESSION);

        require_once "banco-antigo.php";

        $novaTarefa = $_POST['tarefa'] ?? null;
        $codUsuario = $_SESSION["cod_usuario"]?? null;
        if(!is_null($novaTarefa)){
            
            $banco->query("INSERT INTO tarefas (cod, tarefa, cod_usuario) VALUES (NULL, '$novaTarefa', '$codUsuario')");
        }

        if (is_null($codUsuario)) {
            $busca= $banco->query("SELECT * FROM tarefas");
            while($objTarefa = $busca->fetch_object()){
                echo "<br> - $objTarefa->tarefa [Usuario: $objTarefa->cod_usuario]";

            }

        }else{
            $busca= $banco->query("SELECT * FROM tarefas WHERE cod_usuario='$codUsuario'");
            echo "<h3>Tarefeas do Usuario [$codUsuario]</h3>";
            while($objTarefa = $busca->fetch_object()){
                echo "<br> - $objTarefa->tarefa";

            }
        }
        

        

        
    ?>
    <hr>
    <h1>Adicinar Tarefa</h1>
    <form action="" method="post">
        <input type="text" name="tarefa">
        <input type="submit" value="Adicionar">
    </form>
    
</body>
</html>