<?php

    require_once "Controller.php";

    class ListaController extends Controller{
        public function index(){
            $this->carregarView("lista");
        }
        public function login(){
            $this->carregarView("login");
        }

        

    }

?>