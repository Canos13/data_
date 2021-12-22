</head>
<body>
        <header class="cabecera">
            <h2 class="logo">LOGO</h2> 
            <div class="btns">

                <a class="btn" 
                href= <?php  if(isset($_SESSION['user_id'])){ echo "home.php"; } else { echo "/data_";} ?> 
                >Inicio</a>

                <a class="btn" href="">Ver secciones</a>
                <?php  if(isset($_SESSION['user_id'])){ ?>
                    <a class="btn" href="create.php">Crear secciones</a>
                <?php } ?>
                <a class="btn" href="">Acerca de</a>
                <a class="btn" href="">Contactos</a>
            </div>

            <?php  if(isset($_SESSION['user_id'])){ ?>
                <a class="login" href="logout.php">Salir</a>
            <?php } else if($band==0){?>
                <a class="login" href="signup.php">Registrarse</a>
            <?php } else if($band==1){?>
                <a class="login" href="login.php">Iniciar Sesion</a>
            <?php } else {?>  
                <a class="login" href="view/html/login.php">Iniciar Sesion</a>   
            <?php } ?>  

        </header>