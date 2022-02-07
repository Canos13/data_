<?php 

    require "../model/BD.php";

    $bd = new BD();

    $idTabla = $_POST['idCateg'];
    $nombreCampo = $_POST['nombre'];
    $tipoCampo = $_POST['tipo'];
    $bd->insertarColumna($idTabla, $nombreCampo, $tipoCampo);
    
    header("location: ../view/html/create.php");
?>