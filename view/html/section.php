<?php require "../helpers/cabecera.php"; ?>
<?php require "../../model/BD.php"; ?>
<?php require "../../model/Categoria.php"; ?>
    <link rel="stylesheet" href="../css/styles.css">
    <title>Ver sección</title>
<?php 
    session_start();
    $band = 1;
    require "../helpers/navbar.php";  

    $bd = new BD();
    $categoria = new Categoria();

    $categoria = $bd->consultarCategorias();
    foreach($categoria as $cate){

        $numColTablaActual = $bd->numColumnas(($cate->getName()));
        echo $numColTablaActual.'<br />';
        /* printf(" %s ", $resultado->getName()); */
    }


    /* $num = $bd->numTablasEnBD(); 
    echo $num;*/

    
?>