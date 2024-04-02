<form action="" method="GET">
    <label for="num">Digite uma data(##/##/####):</label>
    <input type="text" name="data" id="num"><br>
    <button type="submit">Enviar</button>
</form>

<?php
    function mes($data){
        $partes = explode('/', $data);

        if(count($partes) !== 3){
            return null;
        }
        $dia = intval($partes[0]);
        $mes = intval($partes[1]);
        $ano = intval($partes[2]);

        if(!checkdate($mes, $dia, $ano)){
            return null;
        }
        $nomes_meses = array(
            1 => 'Janeiro', 2=> 'Fevereirio', 3=> 'Março', 4=> 'Abril', 
            5=> 'Maio', 6=> 'Junho', 7=>'Julho', 8=>'Agosto', 
            9 => 'Setembro', 10 => 'Outubro', 11 => 'Novembro', 12 =>'Dezembro'
        );
    
        $data_extenso = $dia . " de ".  $nomes_meses[$mes] ." de ". $ano ;
        return $data_extenso;
    }
    $data = $_GET['data'];
    $data_extenso = mes( $data );
    if($data_extenso !== null ){
        echo "Data: $data<br>";
        echo "Data por extenso: $data_extenso";
    }else{
        echo "Data inválida";
    }

?>