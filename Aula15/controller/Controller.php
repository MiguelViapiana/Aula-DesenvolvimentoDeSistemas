<?php

    class Controller{

        public function carregarView($nomeView, $dadosModel = array()){
            $arquivo = "./view/$nomeView.php";
            if (file_exists($arquivo)) {
                require_once $arquivo;
            }else{
                die("Erro no arquivo -> $arquivo");
            }


        }

    }

?>