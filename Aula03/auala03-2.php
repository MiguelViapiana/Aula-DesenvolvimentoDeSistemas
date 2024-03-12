<form action="" method="GET">
    <label for="num">Em que ano você nasceu?</label>
    <input type="text" name="ano" id="num"><br>
    <button type="submit">Enviar</button>
</form>

<?php

    $ano = $_GET['ano'];
    $idade = 2024 - $ano;
    echo "Sua idade:". $idade;

    if($idade >= 18 && $idade < 70){
        echo "<br>Olhaa... você precisa votar e pode dirigir";
    }else if($idade == 18){
        echo "<br>Você pode dirigir!";
      
    }else if($idade > 16  && $idade < 18 || $idade > 70){
            echo "<br>Legal, você pode votar mas não pode dirigir";
    }else{

        echo "<br>Espere mais um pouco";
    }

?>