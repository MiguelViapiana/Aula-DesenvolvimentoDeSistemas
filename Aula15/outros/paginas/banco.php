    <pre>
<?php 

    class Banco {

        private static $instance;

        private $banco; // var_dump($banco);
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $database = "bd_games";

        function __construct() {
        
        }

        public static function Instance() {
            if(self::$instance === null){
                self::$instance = new self;
                self::$instance->banco = new mysqli(self::$instance->host, self::$instance->user, self::$instance->password, self::$instance->database);    
            }
            return self::$instance;
        }

        static function query($q, $debug = false) : object | bool {
            // self::$banco = new mysqli("localhost", "root", "", "bd_games");
            $resp = self::Instance()->banco->query($q);
            
            if($debug){
                echo "<br> Query: $q"; 
                echo var_dump($resp);    
            }
            
            return $resp;
            // return self::$banco;
        }

        /*function createOnDB($into, $values){
            global $banco;
            
            $q = "INSERT INTO $into VALUES $values";
        
            $resp = $banco->query($q);
            echo "<br> Query: $q"; 
            echo var_dump($resp);
        }*/

        public function fazerLogin(string $usuario, string $senha) : bool {
            $q = "SELECT cod, usuario, nome, senha FROM usuarios  WHERE usuario='$usuario'";
            // echo "<br> Query: $q"; 

            // $busca = $banco->query($q);
            // $busca = Banco::get()->query($q);
            $busca = Banco::query($q);

            if($busca->num_rows > 0){
                $usu = $busca->fetch_object();
                
                // if($s === $usu->senha){
                if(password_verify($senha, $usu->senha)){
                    $resp = "Login :)";
                    if(session_id() == '') {
                        session_start();
                        $_SESSION["user"] = $usuario;
                        $_SESSION["user_id"] = $usu->cod;
                    }
                    return true;
                    // header("Location: ../");
                }else{
                    $resp = "Senha Inválida :/";
                    return false;
                }
                
            }

            return false;
            
        }

        function criarUsuario(string $usuario, string $nome, string $senha, $debug = false) : void {
            $senha = password_hash($senha, PASSWORD_DEFAULT);

            $q = "INSERT INTO usuarios(cod, usuario, nome, senha, tipo) VALUES (NULL, '$usuario', '$nome', '$senha', 'admin')";
        
            $resp = Banco::query($q);
            
            if($debug){
                echo "<br> Query: $q"; 
                echo var_dump($resp);
            }
        }
    
        function deletarUsuario(string $usuario, $debug = false) : void {
            global $banco;
    
            $q = "DELETE FROM usuarios WHERE usuario='$usuario'";
            
            $resp = $banco->query($q);

            if($debug){
                echo "<br> Query: $q"; 
                echo var_dump($resp);
            }
        }
        
        function atualizarUsuario(string $usuario, string $nome="", string $senha="", bool $debug=false) : void {
    
            global $banco;
    
            $set = "";
            if($nome != "" & $senha != ""){
                // os dois
                $novaSenha = password_hash($senha, PASSWORD_DEFAULT);
                $set = "nome='$nome', senha='$novaSenha'";
            } else if($nome != ""){
                // só o nome
                $set = "nome='$nome'";
            } else if ($senha != ""){
                // só a senha
                $novaSenha = password_hash($senha, PASSWORD_DEFAULT);
                $set = "senha='$novaSenha'";
            }
            
            $q = "UPDATE usuarios SET $set WHERE usuario='$usuario'";
            
            $resp = $banco->query($q);
    
            if($debug){
                echo "<br> Query: $q"; 
                echo var_dump($resp);
            }
    
        }


    }


?>
</pre>