<?php
    class BD{
        private $sql;

        public function __construct(){
            $this->sql = new mysqli("by3tkwb22zo3nffnstse-mysql.services.clever-cloud.com","uuxbcszkci1q50hq","HSWqLkRqGOKKTrC47Gj5","by3tkwb22zo3nffnstse");
        }
        
        public function InsertUser($Usuario){
            $consulta = "INSERT INTO users (username, pass) values ('".$Usuario->getUsername()."', '".$Usuario->getPass()."')";
            $this->sql->query($consulta);
            return true;
        }

        public function Consultar($user){
            $consulta = "SELECT id,username,pass FROM users WHERE username = '".$user->getUsername()."'";
            $resultado = $this->sql->query($consulta);
            if($resultado){
                while($row = $resultado->fetch_assoc()){
                    $UsuarioBD = new Usuario($row['username'], $row['pass']);
                    $UsuarioBD->setId($row['id']);
                    return $UsuarioBD;
                }
            } else {
                    return false;
            }
        }

        public function ConsultarID($id){
            $consulta = "SELECT  username FROM users WHERE id = $id";
            $resultado = $this->sql->query($consulta);
            while($row = $resultado->fetch_assoc()){
                return $row['username'];
            } 
        }

        public function ingresarCategoria($nombre){
            $consulta = "INSERT INTO categoria (nombre) values ('$nombre')";
            /* $create = "CREATE TABLE $nombre (id INT AUTO_INCREMENT PRIMARY KEY)"; */
            $this->sql->query($consulta);
            /* $this->sql->query($create); */
        }

        public function consultarCategorias(){
            $categorias = array();
            $consulta = "SELECT * FROM categoria";
            $resultado = $this->sql->query($consulta);
            while($row = $resultado->fetch_assoc()){
                array_push($categorias, $row['nombre']);
            }
            return $categorias;
        }
    } 
?>