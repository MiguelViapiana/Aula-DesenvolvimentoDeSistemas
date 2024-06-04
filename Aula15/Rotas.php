<?php

    class Rotas{

        private $controller = "HomeController";
        private $funcao = "index";
        private $parametro = array();

        function __construct(){
            //echo "teste - rotas";
            $url = $this->getUrl();

            if (is_null($url)) {
                echo "<br> Nenhuma url";
            }else{

                $nomeClasse = ucfirst($url[0]) . "Controller";
                $path = "./Controller/$nomeClasse.php";

                if (file_exists($path)) {
                    $this->controller = $nomeClasse;
                }

                if (isset($url[1]) && !empty($url[1])) {
                    $this->funcao = $url[1];
                }

            }
            require_once "./controller/$this->controller.php";
            //$this->controller = new HomeController()
            $this->controller = new $this->controller;
            call_user_func_array([$this->controller, $this->funcao], $this->parametro);
        }

        function getUrl(){
            $url = $_GET["url"] ?? null;

            if(is_null($url)){
                echo "nenhuma URL ";
                return null;
            }else{
                echo "alguma pagina";
                $novaUrl = explode("/", $url);
                echo "<br> $url";
                echo "<br> ". print_r($novaUrl);
                return $novaUrl;
            }
        }

    }

?>