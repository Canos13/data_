<?php
    class BD{
        private $sql;

        public function __construct(){
            $this->sql = new mysqli("localhost","grafcan","56$78#45a.","grafcan");
           /*  $this->sql = new mysqli("by3tkwb22zo3nffnstse-mysql.services.clever-cloud.com","uuxbcszkci1q50hq","HSWqLkRqGOKKTrC47Gj5","by3tkwb22zo3nffnstse"); */
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

        public function ingresarCategoria($nombre, $userId){
            $consulta = "INSERT INTO categoria (nombre, userId) values ('$nombre',$userId)";
            $create = "CREATE TABLE $nombre (id INT PRIMARY KEY)";
            $this->sql->query($consulta);
            $this->sql->query($create);
        }

        public function consultarCategorias(){
            $categorias = array();
            $consulta = "SELECT * FROM categoria";
            $resultado = $this->sql->query($consulta);
            while($row = $resultado->fetch_assoc()){
                $categoria = new Categoria();
                $categoria->setId($row['id']);
                $categoria->setName($row['nombre']);
                array_push($categorias, $categoria);
            }
            return $categorias;
        }

        public function consultarCategoriasUser($userId){
            $categorias = array();
            $consulta = "SELECT * FROM categoria WHERE userId=$userId";
            $resultado = $this->sql->query($consulta);
            while($row = $resultado->fetch_assoc()){
                $categoria = new Categoria();
                $categoria->setId($row['id']);
                $categoria->setName($row['nombre']);
                array_push($categorias, $categoria);
            }
            return $categorias;
        }

        public function insertarColumna($idTabla, $nombreCampo, $tipoCampo){
            $consulta = "SELECT nombre FROM categoria WHERE id=$idTabla";
            $resultado = $this->sql->query($consulta);
            while($row = $resultado->fetch_assoc()){
                $nombreTabla = $row['nombre'];
                if($tipoCampo == 1){
                    $insertarColumn = "ALTER TABLE $nombreTabla ADD $nombreCampo FLOAT";
                } else {
                    $insertarColumn = "ALTER TABLE $nombreTabla ADD $nombreCampo varchar(100)";
                }
            }
            $this->sql->query($insertarColumn);
        }

        public function insertarDatosEnTabla($data, $idTabla){
            $select = "SELECT nombre FROM categoria WHERE id=$idTabla";
            $resultado = $this->sql->query($select);
            while($row = $resultado->fetch_assoc()){
                $nombreTabla = $row['nombre'];
                $consulta = "INSERT INTO $nombreTabla VALUES ($data)";
            }
            $this->sql->query($consulta);
        }

        public function numColumnas($nombreTabla){
            $consulta = "SELECT count(*) AS NUMBEROFCOLUMNS FROM information_schema.columns WHERE table_name = '$nombreTabla'";
            $resultado = $this->sql->query($consulta);
            if($resultado){
                while($row = $resultado->fetch_assoc()){
                    $num =  $row['NUMBEROFCOLUMNS'];
                }
                return $num;
            }
        }

        public function nombreCols($nombreTabla){
            $consulta = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '$nombreTabla'";
            $resultado = $this->sql->query($consulta);
            $nombreColumnas = array();
            if($resultado){
                while($row = $resultado->fetch_assoc()){
                    array_push($nombreColumnas, $row['COLUMN_NAME']);
                }  
                return $nombreColumnas;
            }
        }

        public function datosCols($nombreTabla,$nombreCol){
            $consulta = "SELECT $nombreCol FROM $nombreTabla";
            $resultado = $this->sql->query($consulta);
            $datosCol = array();
            if($resultado){
                while($row = $resultado->fetch_assoc()){
                    array_push($datosCol, $row["$nombreCol"]);
                }  
                return $datosCol;
            }
        }
    } 
?>