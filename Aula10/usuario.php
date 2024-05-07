<?php 

$usuarios = [
    ['usu' => "miggas", "nome" => "Miguel", 'senha' => '123'],
    ['usu' => 'gdc1000', 'nome' => 'Danilo', 'senha' => 'abc'],
    ['usu' => 'xorza', 'nome' => 'Gabriel', 'senha'=> '123jf@'],
];

    function verUsuarios($usr, $sen ){
        global $usuarios;
        for ($i=0; $i < count($usuarios); $i++) { 
            if($usr == $usuarios[$i]['usu']){     
                if($sen == $usuarios[$i]['senha']){
                    return true;
                }
            }
        }
        return false;
    }
    

?>

