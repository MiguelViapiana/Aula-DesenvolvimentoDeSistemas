<form action="" method="GET">
    <label for="metro">Digite o seu salário por hora:</label>
    <input type="text" name="salarioHora" id="num"><br>
    <label for="metro">Digite a sua carga horário mensal:</label>
    <input type="text" name="TempoHora" id="num"><br>
    <button type="submit">Enviar</button>
</form>

<?php

$salarioHora = $_GET['salarioHora'];
$TempoHora = $_GET['TempoHora'];

echo "o salário recebido por hora é de: ". $salarioHora . " e a carga horária ao mês é de: ". $TempoHora. ". <br>O total de dinheiro recebido ao mês é de: ". ($salarioHora * $TempoHora). " reais";

?>