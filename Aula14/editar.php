<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    require_once "funcoes.php";

    $cod = $_GET["p"] ?? null;

    if (is_null($cod)) {
        echo"<h3>Nenhum produto para editar...</h3>";
        return;
    }

    $nome = $_POST['nome'] ?? null;
    $marca = $_POST['marca'] ?? null;
    require_once "banco.php";

    if (is_null($nome) || is_null($marca)) {
        //Editar
        $query = "SELECT nome, marca FROM pecas WHERE cod='$cod'";
        $busca = $banco->query($query);
        $obj_produto = $busca->fetch_object();
        $nome = $obj_produto->nome;
        $marca = $obj_produto->marca;
    }else{
        //Salvar
        $q = "UPDATE pecas SET nome='$nome', marca='$marca' WHERE cod='$cod'";
        $busca = $banco->query($q);
        header("Location: aula14.php");

    }

    ?>

    <h1>Editar</h1>
    <form action="" method="post">
        <label for="">Cod:</label>
        <input type="text" size="5" name="cod" id="" value="<?= $cod ?>" disabled>

        <label for="">Nome:</label>
        <input type="text" size="50" name="nome" id="" value="<?= $nome ?>">

        <label for="">Marca:</label>
        <select name="marca" id="">
        <?php
            require_once "banco.php";
            $q = "SELECT * FROM marcas";
            $busca2 = $banco->query($q);
            while($obj = $busca2->fetch_object()){
                echo "<option value='$obj->cod'>$obj->cod -$obj->nome</option>";
            }

        ?>
        </select>

        <input type="submit" value="Salvar" name="salvar">

    </form>
</body>
</html>