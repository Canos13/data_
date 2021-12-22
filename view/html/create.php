<?php require "../helpers/cabecera.php"; ?>
<?php require "../../model/BD.php"; ?>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/popup.css">
    <title>Crear seccion</title>
<?php 
    session_start();
    require "../helpers/navbar.php";
      
?>
<section>

    <div class="items">
        <div class="addCategory">     
            <a href="#popup1">
                <h3>Agregar Sección</h3>
                <img src="../images/plusa.png">
            </a>
        </div>

        <?php 
            $bd = new BD("localhost","root","","data");
            $categorias = $bd->consultarCategorias();

            if($categorias){
                foreach($categorias as $categoria){
                    printf('<div class="item">');
                        printf('<h1> %s </h1>', $categoria);
                    printf('</div>');
                }
            }    
        ?>
    </div>

    <div id="popup1" class="overlay">
        <div class="popup">
            <h2 class="headerCategory">Agregar Categoria</h2>
            <a class="close" href="#">&times;</a>
            <div class="content">
                <form action="../../controller/addCategory.php" method="post">
                    <label for="">Nombre de la categoria:</label>
                    <br>
                    <input type="text" placeholder="Nombre" name="nombre"><br>
                    <input type="submit" value="Guardar">
                </form>
            </div>
        </div>
    </div>

<?php require "../helpers/pie.php"; ?>