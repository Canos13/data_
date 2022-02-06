<?php
  session_start();
  if (isset($_SESSION['user_id'])) {
    header('Location: home.php');
  }
  require '../../model/Usuario.php';
  require '../../model/BD.php';

  $BD = new BD();
  $message = '';

  if (!empty($_POST['user']) && !empty($_POST['password'])) {
      $passw = password_hash($_POST['password'], PASSWORD_BCRYPT);
      $Usuario = new Usuario($_POST['user'], $passw);
      if ($BD->InsertUser($Usuario)) {
          $userBD = $BD->Consultar($Usuario);
          $_SESSION['user_id'] = $userBD->getId();
          header('Location: home.php');
      } else {
          $message = 'Error al intentar crear el usuario';
      } 
  }
  require "../helpers/cabecera.php";
?>

    <title>Registrarse</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/styles.css">

    <?php 
      $band =1;
      require "../helpers/navbar.php"; 
    ?>
    
    <?php if(!empty($message)): ?>
      <p class="message"> <?= $message ?></p>
    <?php endif; ?>

    <section class="bg-blue">
      <div class="formulario top">
        <h1 class="txtH1">Registrarse</h1>
        <form action="signup.php" method="POST">
        <?php require "../helpers/form.php" ?> 
      </div>
      
      <section class="olas">
          <div class="wave wave1"></div>
          <div class="wave wave2"></div>
          <div class="wave wave3"></div>
          <div class="wave wave4"></div>
      </section>

<?php require "../helpers/pie.php" ?>