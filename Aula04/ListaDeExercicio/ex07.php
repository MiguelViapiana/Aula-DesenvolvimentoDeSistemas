<form action="" method="GET">
    <label for="num">Digite um númer para calcular o seu fatorial:</label>
    <input type="text" name="num1" id="num">
    <button type="submit">Enviar</button>
</form >
<?php

        $num = $_GET['num1'];
        $valorFinal = 1;
        for ($i = $num; $i > 0; $i--) {
            $valorFinal *= $i;
        }
        echo "O fatorial de $num é: $valorFinal";

?>