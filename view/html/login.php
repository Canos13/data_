<?php
  session_start();
  if (isset($_SESSION['user_id'])) {
    header('Location: home.php');
  }

  require '../../model/Usuario.php';
  require '../../model/BD.php';

  if (!empty($_POST['user']) && !empty($_POST['password'])) {
    $Usuario = new Usuario($_POST['user'],$_POST['password']);
    $BD = new BD();
    $userBD = $BD->Consultar($Usuario);
    $message = '';

    if ($userBD) {
      if(password_verify($Usuario->getPass() , $userBD->getPass())){
        $_SESSION['user_id'] = $userBD->getId();
        header("Location: home.php");
      }
    } else {
      $message = 'Usuario o Contraseña incorrectos';
    }
  }
  require "../helpers/cabecera.php";
?>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Iniciar Sesión</title>

    <?php 
      $band =0;
      require "../helpers/navbar.php"; 
    ?>

    <?php if(!empty($message)): ?>
      <p class="message"> <?= $message ?></p>
    <?php endif; ?>

    <section class="bg-blue">
      <div class="formulario top">
        <h1 class="txtH1">Iniciar</h1>
        <?php require "../helpers/form.php" ?>
      </div>
      
      <section class="olas">
          <div class="wave wave1"></div>
          <div class="wave wave2"></div>
          <div class="wave wave3"></div>
          <div class="wave wave4"></div>
      </section>
      
<?php require "../helpers/pie.php" ?>