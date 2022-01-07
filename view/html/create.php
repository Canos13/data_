<?php require "../helpers/cabecera.php"; ?>
<?php require "../../model/BD.php"; ?>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/popup.css">
    <link rel="stylesheet" href="../css/cards.css">
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
            $bd = new BD();
            $categorias = $bd->consultarCategorias();

            if($categorias){
                foreach($categorias as $categoria){
                    printf('<div class="item">');
                        printf('<div class="container">');
                            printf('<div class="card">');
                                printf('<div class="box">');
                                    printf('<div class="content">');
                                        printf('<h3>%s</h3>', $categoria);
                                        printf('<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p>', $categoria);
                                        printf('<a href="#">Boton</a>');
                                    printf('</div>');
                                printf('</div>');
                            printf('</div>');
                        printf('</div>');
                    printf('</div>');
                }
            }    
        ?>
    </div>

    <!-- <div class="container">  
        <div class="card">
            <div class="box">
            <div class="content">
                <h3>Card One</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p>
                <a href="#">Read More</a>
            </div>
            </div>
        </div>
    </div> -->

    <div id="popup1" class="overlay">
        <div class="popup">
            <h2 class="headerCategory">Agregar Categoria</h2>
            <a class="close" href="#">&times;</a>
            <div class="content">
                <form action="../../controller/addCategory.php" method="post">
                    <label class="text-Nombre" for="">Nombre de la categoria:</label>
                    <br>
                    <input type="text" placeholder="Nombre" name="nombre" autocomplete="off" required><br>
                    <input type="submit" value="Guardar">
                </form>
            </div>
        </div>
    </div>

<?php require "../helpers/pie.php"; ?>