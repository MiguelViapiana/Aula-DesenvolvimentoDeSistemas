<?php

    echo "<h1>Strings</h1><br>";

    function quebra()
    {
        echo "\n<br>\n";
    }

    $str = "uma String";
    echo $str[-2];

    quebra();
    $str[4] = "A";
    echo "<br>" . $str;

    echo "<br>" . $str[1] . "ateus \n Paulo";

    quebra();

    $tamanho = strlen($str);
    echo "Tamnho: " . $tamanho;

    for ($i = 0; $i < $tamanho; $i++) {
        echo "<br> - " . $str[$i];
    }

    quebra();

    echo "<br> Eu sou feliz";
    echo '<br> Eu sou feliz';

    echo "<br> vamo \n embora";
    echo '<br> vamo \n embora';

    quebra();
    $videogame = "Sonic";
    echo "<br>Estou jogando: {$videogame}";
    echo '<br>Estou jogando: {$videogame}';

    quebra();
    echo "this isn't";
    echo '<br>this isn\'t';

    quebra();
    echo "<br> Deletar disco C:\\";
    echo "<br> Deletar disco C:\usuario\\nathan";

    quebra();
    function soma($a, $b)
    {
        return $a + $b;
    }

    $num = soma(10, 35);

    echo "<br>O resultado da soma é $num.";
    echo "<br>O resultado da soma é {$num}.";
    echo '<br>O resultado da soma é $num.';
    echo '<br>O resultado da soma é {$num}.';
    //echo"<br>O resultado da soma é $soma(10, 35).";
    //echo"<br>O resultado da soma é {$soma(10, 35)}.";
    //echo"<br>O resultado da soma é ". $soma(10, 35) .".";

    quebra();
    $cores = ["Roxo", "Amarelo", "Cinza"];
    //echo "<br> Valor do array: {$cores[1]}";
    echo "<br> Valor  do array: " . $cores[2] . ".";

    $a = 10;
    $$a = 20;
    $valor=50;

    echo "<br> Valor {$a} -- Valor {$$a} -- R\$$valor";

    quebra();

    $heredoc = <<<NOMEFELIZ

    <h2> O titulo da pagina</h2>
    <p> O texto da pagina </p>
    <p> Valor R$ {$valor} </p>

    NOMEFELIZ;

    echo $heredoc;

    $nowdoc = <<<'OUTRONOME'

    <h2> O titulo da pagina</h2>
    <p> O texto da pagina </p>
    <p> Valor R$ {$valor} </p>

    OUTRONOME;

    echo $nowdoc;

    quebra();
    $str = "123naesfthtjk";
    $tamnho = strlen($str);
    echo "String: {$str}<br>";
    echo "Tamannho: {$tamanho}";

    quebra();
    $str = "janela";
    $parte = substr($str, 3, 6);
    echo "Parte da string: {$parte}";
    
    echo "<br>Maiusculo:". strtoupper($parte);
    echo "<br>Minusculas: ". strtolower($parte);

    $nova = str_replace("la", "linha", $str);
    echo  "<br> Nova String: {$nova}";

    /*
    number_fromat() // formatar um numero
    print_r() // mostra o array
    printf() // imprime e formata
    var_dump() // mostra todos os dados do array ou variavel

    ltrim() // remove espaços
    rtrim()
    trim()

    str_word_count() // contagem das palavras
    explode() // separa a string em arrays
    str_split()

    implode() // junta a string
    join()

    strtoupper() // TUDO MAIUSCULO  
    strtolower() // tudo minusculo
    ucfirst() // Só essa maiusculo
    ucwords() // Todas as primeiras letras de cada palavra Maiusculas

    strrev() // Inverte a sua string
    strpos() // Retorna a posição de algo especifico da string
    stripos()//  Mesma coisa que acima mas não sensitivo a maiúsculas/minúsculas

    str_pad(),


    */




    


    

?>