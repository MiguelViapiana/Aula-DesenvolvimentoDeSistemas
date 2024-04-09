<form action="" method="GET">
    <label for="num">Digite um texto:</label>
    <input type="text" name="text1" id="num"><br>
    <button type="submit">Enviar</button>
</form>

<?php

    $str = $_GET['text1'];

    echo "Sua String invertida: ". strrev(strtoupper($str));

    echo "<br><br>A sua String na vertical: ";
    linha($str);
    echo "<br>";
    echo"A sua string em formato de piramide: <br>";
    piramide($str);

    function linha($str){
        $tamanho = strlen($str);
        for ($i=0; $i < $tamanho; $i++) { 
            echo "<br> ". $str[$i];
        }
    }
    function piramide($str){
        $tamanho = strlen($str);
        for ($i=1; $i < $tamanho+1; $i++) { 
            for ($j=0; $j < $i; $j++) { 
                echo"". $str[$j];

            }
            echo"<br>";
        }
    }
     


?>