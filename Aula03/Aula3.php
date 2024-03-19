<form action="" method="GET">
    <label for="num">Digite um número:</label>
    <input type="text" name="num" id="num">
    <button type="submit">Enviar</button>
</form>

<?php

    $raio = $_GET['num'];

    $area = M_PI * pow($raio, 2);
    $perimetro = 2 * M_PI * $raio;

    echo "O raio é: ". $raio."<br>";
    echo "A area é de: ".number_format($area, 2) ."<br>";
    echo "O perimetro é de: ". number_format($perimetro, 2)."<br>";

    echo "<p>";
    echo "Abs - Modulo: ". abs($raio);
    echo"<br>Potência: ". pow($raio, 4);
    echo"<br>Raiz quadrada: ". sqrt($raio); 
    echo"<br>Arredondar normal: ". round($raio);
    echo"<br>Arredondar P/ baixo: " .floor($raio);
    echo"<br>Arredondar P/ Cima: ". ceil($raio);
    echo"<br>Parte inteira: ". intval($raio);
    echo"</p>";

    echo"<p>";

    echo"<h3> Mini Matematica </h3>";
    $a =4;
    $b =5;
    $c = $a + $b;

    $c = $c + 5;
    $c += 5;

    $b = $b + $a;
    $b += $a;

    $b = $b -1;
    $b -= 1;
    $b--;

    $a++;
    ++$a;

    $b--;
    --$b;

    $b =1999;
    echo"<br>Valor: ". --$b;
    echo"<br>Valor: ". $b;

    $var = "janela";
    $$var =10;
    //$janela = 10;

    echo"<br>";
    echo"<br>-". $var;
    echo"<br>-". $janela;
    echo"</p>";


?>