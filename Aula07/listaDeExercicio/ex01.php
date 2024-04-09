<form action="" method="GET">
    <label for="num">Digite um texto:</label>
    <input type="text" name="text1" id="num"><br>
    <label for="num">Digite um segundo texto:</label>
    <input type="text" name="text2" id="num"><br>
    <button type="submit">Enviar</button>
</form>

<?php

$str = $_GET[ 'text1' ];
$str2 = $_GET['text2'];

echo "Srting 1: {$str}";
echo "<br>String 2: {$str2}";
echo "<br>Tamanho de '{$str}': ". strlen( $str ) . "  caracteres<br>";
echo "<br>Tamanho de '{$str2}': ". strlen( $str2 ) . " caracteres<br>";
if(strlen($str) != strlen($str2)){
    echo "<br>As duas strings são de tamanhos diferentes!";
}else{
    echo "<br>As duas strings são de tamnhos iguais!";
}
if($str == $str2){
    echo "<br>As duas string contém o mesmo conteúdo!!";
}else{
    echo "<br>As duas string contém conteúdos diferentes!";
}






?>