<?php
    session_start();

    if (!isset($_SESSION['user_id'])){
        Header('location: login.php');
    } else {
        require '../../model/BD.php';

        $bd = new BD("localhost","root","","data");
        $username = $bd->ConsultarID($_SESSION['user_id']);
        /* echo $username; */
    }
    include "../helpers/cabecera.php"
?>
    <link rel="stylesheet" href="../css/styles.css">
    <title>Home</title>
<?php  include "../helpers/navbar.php" ?>
<?php  include "../helpers/cuerpo.php" ?>

<!-- infoooooo -->

<?php  include "../helpers/pie.php" ?>