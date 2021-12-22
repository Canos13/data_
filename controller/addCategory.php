<?php 

    require "../model/BD.php";

    $bd = new BD("localhost","root","","data");

    $bd->ingresarCategoria($_POST['nombre']);

    header("location: ../view/html/create.php");

?>