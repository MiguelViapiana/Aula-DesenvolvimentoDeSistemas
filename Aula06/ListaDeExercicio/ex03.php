<form action="" method="GET">
    <label for="num">Digite quantidade de colunas:</label>
    <input type="text" name="colunas" id="num"><br>
    <label for="num">Digite quantidade de linhaas:</label>
    <input type="text" name="linhas" id="num"><br>
    <button type="submit">Enviar</button>
</form>

<?php

    $linha = $_GET['linhas'];
    $coluna = $_GET['colunas'];

    function desenhar( $l, $c)
    {

        function linha($l)
        {
            echo "+";
            for ($i = 0; $i < $l; $i++) {
                echo "-";
            }
            echo "+";
        }
        
        function coluna($l, $c)
        {
            echo "<br>";
            for ($j=0; $j < $c; $j++) { 
                echo "|";
                echo str_repeat('&nbsp;', $l+4);
                echo "|<br>";
            }
            
        }
        linha($l);
        coluna($l, $c);
        linha($l);
    } 
    desenhar($linha, $coluna);
?>