<?php
    session_start();

    if (!isset($_SESSION['user_id'])){
        Header('location: login.php');
    } else {
        require '../../model/BD.php';
        $bd = new BD();
        $username = $bd->ConsultarID($_SESSION['user_id']);
    }
    include "../helpers/cabecera.php"
?>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/Main.css">
    <title>Home</title>
<?php  include "../helpers/navbar.php" ?>
<?php  include "../helpers/cuerpo.php" ?>

<!-- infoooooo -->

<?php  include "../helpers/pie.php" ?>