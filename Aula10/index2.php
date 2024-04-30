
<?php 

    $usuarios = [
        ['usu' => "miggas", "nome" => "Miguel", 'senha' => '123'],
        ['usu' => 'gdc1000', 'nome' => 'Danilo', 'senha' => 'abc'],
        ['usu' => 'xorza', 'nome' => 'Gabriel', 'senha'=> '123jf@'],
    ];
    function formulario($metodo, ...$form){
        echo "<form action=\"\" method=\"$metodo\">";
        foreach($form as $campo){
            $campo = ucfirst($campo);
            echo "<label for='{$campo}'>$campo</label>";
            echo "<input type='text' name='{$campo}' id='num'><br>";
        } 
        echo '<input type="submit" value="Enviar">';
        echo "</form>";
    }
    if(!isset($_GET['Usuario']) && !isset($_GET['Senha'])) {
        formulario("get", "usuario", "senha");
    }
    
  

    if(isset($_GET['Usuario']) && isset($_GET['Senha'])) {
        $num =0;
        $usu = $_GET['Usuario'];
        $senha = $_GET['Senha'];
        foreach($usuarios as $usuario){
            if($usuario['usu'] === $usu && $usuario[ 'senha'] === $senha) {
                echo "Login efetuado com suscesso. <br>Bem Vindo ".$usuario['nome']. "!<br>";
                $num++;
            }
        }
        if($num == 0){
            formulario("get", "usuario", "senha");
            echo "Falha ao efetuar o Login!!";
            
        }
        
        
    }  

    function verUsuarios($usr, $sen ){
        global $usuarios;
        for ($i=0; $i < count($usuarios); $i++) { 
            //echo "<br>". print_r($usuarios[$i]);
            if($usr == $usuarios[$i]['usu']){
                echo "<br>usuario igual";
                if($sen = $usuarios[$i]['senha']){
                    echo "<br>senha - igual";
                    return true;
                }else{
                    echo "<br>senha - não";
                }
            }else{
                echo "<br>Usuario - não";
            }
        }
        return false;
    }

     echo verUsuarios("miggas", "456");

?>