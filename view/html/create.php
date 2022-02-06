<?php require "../helpers/cabecera.php"; ?>
<?php require "../../model/BD.php"; ?>
<?php require "../../model/Categoria.php"; ?>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/popup.css">
    <link rel="stylesheet" href="../css/cards.css">
    <title>Crear sección</title>
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
            $categorias = new Categoria();
            $categorias = $bd->consultarCategorias();

            if($categorias){
                foreach($categorias as $categoria){
                    printf('<div class="item">');
                        printf('<div class="container">');
                            printf('<div class="card">');
                                printf('<div class="box">');
                                    printf('<div class="content">');
                                        printf('<h3>%s</h3>', $categoria->getName());
                                        printf('<a href="#popup2" onclick="value(%d)" id="%d">Agregar Campos</a>',$categoria->getId(),$categoria->getId());
                                        printf('<a href="#popup3" onclick="val(%d)">Cargar Información</a>',$categoria->getId());
                                    printf('</div>');
                                printf('</div>');
                            printf('</div>');
                        printf('</div>');
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
                    <label class="text-Nombre">Nombre de la categoria:</label>
                    <br>
                    <input type="text" placeholder="Nombre" name="nombre" autocomplete="off" required><br>
                    <input type="submit" value="Guardar">
                </form>
            </div>
        </div>
    </div>

    <div id="popup2" class="overlay">
        <div class="popup">
            <h2 class="headerCategory">Agregar Campo</h2>
            <a class="close" href="#">&times;</a>
            <div class="content">
                <form action="../../controller/addColum.php" method="post">
                    <input type="number" id="idCateg" name="idCateg" style="display:none">
                    <label class="text-Nombre">Nombre del campo: </label>
                    <br>
                    <input type="text" placeholder="Nombre" name="nombre" autocomplete="off" required><br>
                    <label class="text-Nombre">Tipo de Dato: </label>
                    <select class="text-Nombre" required name="tipo">
                        <option value="1"> Numérico  </option>
                        <option value="2" selected> Texto </option>
                    </select>
                    <br/><br/>
                    <input type="submit" value="Guardar">
                </form>
            </div>
        </div>
    </div>

    <div id="popup3" class="overlay">
        <div class="popup">
            <h2 class="headerCategory">Cargar Información</h2>
            <a class="close" href="#">&times;</a>
            <div class="content">
                <form action="../../controller/uploadCSV.php" enctype="multipart/form-data" method="post">
                    <input type="number" id="idCate" name="idCate" style="display:none">
                    <img src="../images/csv.jpg" class="img-csv">
                    <br>
                    <input type="file" name="csv" required><br /><br />
                    <input type="submit" name="enviar" value="Cargar .CSV">
                </form>
            </div>
        </div>
    </div>

    <script>
        function value(index){
            console.log(index);
            var idCateg = document.getElementById('idCateg');
            idCateg.setAttribute("value", index);
        }


        function val(index){
            console.log(index);
            var idCateg = document.getElementById('idCate');
            idCateg.setAttribute("value", index);
        }
    </script>

<?php require "../helpers/pie.php"; ?>