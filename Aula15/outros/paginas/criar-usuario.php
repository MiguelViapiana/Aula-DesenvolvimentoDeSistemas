<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Criar Usuario</h1>
    
    <form action="" method="post">
        <label for="">Usuario:</label>
        <input type="text" name="usuario" value="<?= $usuario ?>">

        <label for="">Nome:</label>
        <input type="text" name="nome" value="<?= $nome ?>">
        
        <label for="">Senha:</label>
        <input type="text" name="senha" value="<?= $senha ?>">

        <input type="submit" value="Criar">
    </form>

    <h3> <?= $resp ?> </h3>

    
</body>
</html>