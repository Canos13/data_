</head>
<body>
        <header class="cabecera">
            <img class="logo" src="<?php if(isset($band) && $band==2){
                                    echo "view/images/log.jpeg";
                                } else { 
                                    echo "../images/log.jpeg"; 
                                } 
                          ?>">
            <div class="btns">
                <a 
                    class="btn" 
                    href=<?php  
                            if(isset($_SESSION['user_id'])){ 
                                echo "home.php"; 
                            } else { 
                                    echo "index.php";
                                }  
                          ?> 
                >Inicio</a>
                <a 
                    class="btn" 
                    href=<?php if(isset($band) && $band==2){
                                    echo "view/html/section.php";
                                } else { 
                                    echo "section.php"; 
                                } 
                          ?>  
                >Ver secciones</a>

                <?php  if(isset($_SESSION['user_id'])){ ?>
                    <a class="btn" href="create.php">Crear secciones</a>
                <?php } ?>
                
            </div>
            
            
            <a class="login" 
                <?php  if(isset($_SESSION['user_id'])){ ?>
                    href="logout.php">Salir
                <?php } else if(isset($band)&&$band==0){?>
                    href="signup.php">Registrarse
                <?php } else if(isset($band)&&$band==1){?>
                    href="login.php">Iniciar Sesion
                <?php } else {?>  
                    href="view/html/login.php">Iniciar Sesion
                <?php } ?>
            </a>   

        </header>