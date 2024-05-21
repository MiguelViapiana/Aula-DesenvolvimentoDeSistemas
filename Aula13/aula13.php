<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        require_once "banco.php";

        $q = "SELECT * FROM pecas";
        $busca = $banco->query($q);

        $q = "SELECT * FROM marcas";
        $busca2 = $banco->query($q);

    ?>
</body>
</html>

