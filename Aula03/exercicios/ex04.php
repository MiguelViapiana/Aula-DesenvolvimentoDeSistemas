<form action="" method="GET">
    <label for="num">Digite uma letra:</label>
    <input type="text" name="char" id="num">
    <button type="submit">Enviar</button>
</form>

<?php

    $char = $_GET['char'];

    if(strtolower($char) == "a" || strtolower($char) == 'e' || strtolower($char) == 'i' || strtolower($char) == 'o' || strtolower($char) == 'u'){
        echo "A letra digitada é VOGAL!!";
    }else{
        echo "A letra digitada é CONSOANTE!!";
    }

?>