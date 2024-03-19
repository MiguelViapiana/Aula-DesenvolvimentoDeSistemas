<form action="" method="GET">
    <label for="num">Digite uma nota:</label>
    <input type="text" name="nota1" id="num">
    <label for="num">Digite a segunda nota:</label>
    <input type="text" name="nota2" id="num">
    <button type="submit">Enviar</button>
</form>

<?php

    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];

    $somaNotas = $nota1 + $nota2;

    if($somaNotas/2 == 10){
        echo "APROVADO COM DISTINÇÃO!!";
    }else if($somaNotas/2 >= 7){
        echo "APROVADO!!";
    }else{
        echo "REPROVADO!!";
    }


?>