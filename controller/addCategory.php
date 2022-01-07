<?php 

    require "../model/BD.php";

    $bd = new BD();

    $bd->ingresarCategoria($_POST['nombre']);

    header("location: ../view/html/create.php");

?>