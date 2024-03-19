<form action="" method="GET">
    <label for="num">Digite o preço do primerio produto:</label>
    <input type="text" name="prod1" id="num">
    <label for="num">Digite o preço do segundo produto:</label>
    <input type="text" name="prod2" id="num">
    <label for="num">Digite o preço do tercerio produto:</label>
    <input type="text" name="prod3" id="num">
    <button type="submit">Enviar</button>
</form>

<?php

    $prod1 = $_GET['prod1'];
    $prod2 = $_GET['prod2'];
    $prod3 = $_GET['prod3'];
    $prodComprar;

    if ($prod1 < $prod2) {
        $prodComprar = $prod1;
    } else {
        $prodComprar = $prod2;
    }
    
    if ($prodComprar > $prod3) {
        $prodComprar = $prod3;
    }
    echo 'O produto que você deve comprar é com o preço de: '. $prodComprar;

?>