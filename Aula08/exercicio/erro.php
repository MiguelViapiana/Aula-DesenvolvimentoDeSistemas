<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro</title>
</head>
<body>
    <h1>Erro no registro</h1>
    <?php
    if(isset($_GET['mensagem'])) {
        echo "<p>{$_GET['mensagem']}</p>";
    }
    ?>
</body>
</html>