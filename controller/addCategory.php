<?php 
    session_start();

    require "../model/BD.php";

    $bd = new BD();

    $bd->ingresarCategoria($_POST['nombre'], $_SESSION['user_id']);

    header("location: ../view/html/create.php");

?> 