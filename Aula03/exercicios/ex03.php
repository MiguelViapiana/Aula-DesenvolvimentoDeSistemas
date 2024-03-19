<form action="" method="GET">
    <label for="num">Digite o seu sexo(M) ou (F):</label>
    <input type="text" name="sexo" id="num">
    <button type="submit">Enviar</button>
</form>

<?php

    $sexo = $_GET['sexo'];

    if($sexo == 'M' || $sexo == 'm'){
        echo "Sexo MASCULINO!!";
    }else if($sexo == 'F' || $sexo == 'f'){
        echo "Sexo FEMININO!!";
    }else{
        echo "Sexo inválido!";
    }

?>