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

        if($numColTablaActual > 2){
            $columName = $bd->nombreCols(($cate->getName()));
            $primerCol = $columName[1];
            $segundaCol = $columName[2];
            
            $datosPrimeraCol = $bd->datosCols(($cate->getName()), $primerCol);
            $datosSegundaCol = $bd->datosCols(($cate->getName()), $segundaCol);
           
            echo '<br /><br />';
            print_r($datosPrimeraCol);
            echo '<br /><br />';
            print_r($datosSegundaCol);

        }
        
        /* printf(" %s ", $resultado->getName()); */
    }
    
?>