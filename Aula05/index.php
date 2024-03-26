<?php

    declare(strict_types = 1);

function nomeBonito()
{
    echo "Testando minha função bonita";
}
nomeBonito();


function criarTitulo($texto)
{
    echo "<i><h1>" . $texto . "</h1></i>";
}
criarTitulo("Título Aula 5 - Funções");


function tituloLegal($texto)
{
    echo "<h2>###################</h2>";
    echo "<h2>## " . $texto . " ##</h2>";
    echo "<h2>###################</h2>";
}
tituloLegal("Calcular Medias");


function calcularmedia($nome, $nota1, $nota2)
{
    $media = ($nota1 + $nota2) / 2;

    if ($media >= 7) {
        echo "<p>Aluno(a) ($nome) foi aprovado com média {$media}</p>";
    } else {
        echo "<p>Aluno(a) ($nome) foi reprovado com média... melhor não saber >.<</p>";
    }
}
calcularmedia("Miguel", 6.0, 4.8);
calcularmedia("Rafael", 5.0, 10.0);
calcularmedia("Matheus", 9.0, 8.8);

function somar($a, $b)
{
    $soma = $a + $b;
    echo "<li>{$a} + {$b} = {$soma}";
}

function somarNumeros(...$numeros)
{
    $soma = 0;
    echo "<li>";
    for ($i = 0; $i < count($numeros); $i++) {
        $soma += $numeros[$i];
        echo $numeros[$i] . "+ ";
    }
    echo "= " . $soma;
}
echo "listinha de somas: <br>";
somar(4, 7);
somar(19, 22);
somar(1, 97);
somar(7, 8);

echo "<br><br>";
somarNumeros(3, 4, 10, 18, 22, 34, 59);

function seila($nome, $numero, $texto, ...$coisas)
{
    echo "<br>";
    echo var_dump($coisas);
}
seila("Nome", 30, "texto", 10, "outro texto", 5, 19.3, true, false);

tituloLegal("Outras Funções");

$verdadeiro = true;

if ($verdadeiro) {
    function calcular($nome, $ano)
    {
        $idade = 2024 - $ano;
        echo "<p>O {$nome} tem {$idade} anos.</p>";
    }
}
if ($verdadeiro) {
    calcular("Jose", 1970);
}

function naoFacoIdea()
{

    echo "<br> não sei";

    
}
naoFacoIdea();

function petersoma(&$num)
{
    $num += 5;
    echo "<br>Num - {$num}";
}
$var1 = 10;
echo "<br> var 1 - {$var1}";
petersoma($var1);
echo "<br> var 1 - {$var1}";
echo"<br><br>";


function subtração($a=10, $b=5){
    $sub = $a - $b;
    echo "<li> {$a} - {$b} = {$sub}";
}
subtração();
subtração(50);
subtração(74, 4);

echo"<br><br>";

function divisão(float $num1,  float $num2){
    echo var_dump($num1);
    echo var_dump($num2);
    $res = $num1 / $num2;
    return $res;
}
$div = divisão(40, 5);
echo "Contar: ". $div;

function comida(){
    echo "<br>Estou com fome";
}

$fome = "comida";
$fome();

function conta($a, $b, &$resposta){
    $resposta = $a + $b;
}

$resp =0;
conta(33, 6, $resp);

echo"<br>Resposta: ".  $resp;