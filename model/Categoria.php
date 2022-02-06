<?php

    class Categoria{
        private $id;
        private $name;

        public function __construct(){
            $this->name="";
            $this->id="";
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }
    }

?>