<form action="" method="GET">
    <label for="num">Digite um número:</label>
    <input type="text" name="num" id="num">
    <button type="submit">Enviar</button>
</form>

<?php

    $num = $_GET['num'];

    if($num < 0){
        echo "Valor NEGATIVO!!";
    }else{
        echo "Valor POSITIVO!!";
    }

?>