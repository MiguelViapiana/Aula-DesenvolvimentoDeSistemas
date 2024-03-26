<form action="" method="GET">
    <label for="num">Digite um número para a tabuada:</label>
    <input type="text" name="num" id="num">
    <button type="submit">Enviar</button>
</form

<?php

    $num = $_GET['num'];
    $resultado;
    for( $i=0; $i<11; $i++){
        $resultado = $num * $i;
        echo "$num X $i = $resultado";
    }

?>