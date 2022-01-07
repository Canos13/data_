</head>
<body>
        <header class="cabecera">
            <h2 class="logo">LOGO</h2> 
            <div class="btns">

                <a 
                    class="btn" 
                    href=<?php  
                            if(isset($_SESSION['user_id'])){ 
                                echo "home.php"; 
                            } else { 
                                    echo "/data_";
                                }  
                          ?> 
                >Inicio</a>

                <a class="btn" href="">Ver secciones</a>
                <?php  if(isset($_SESSION['user_id'])){ ?>
                    <a class="btn" href="create.php">Crear secciones</a>
                <?php } ?>
                <a class="btn" href="">Acerca de</a>
                <a class="btn" href="">Contactos</a>
            </div>
            
            
            <a class="login" 
                <?php  if(isset($_SESSION['user_id'])){ ?>
                    href="logout.php">Salir
                <?php } else if($band==0){?>
                    href="signup.php">Registrarse
                <?php } else if($band==1){?>
                    href="login.php">Iniciar Sesion
                <?php } else {?>  
                    href="view/html/login.php">Iniciar Sesion
                <?php } ?>
            </a>   

        </header>