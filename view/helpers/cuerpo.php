
    <section class="main">
        <section class="One">
                <div class="text">
            <?php if(!isset($_SESSION['user_id'])){ ?>
                    <h1>Crea tu sitio con tus datos</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur 
                        adipisicing elit. Facere unde, sed similique 
                        in ipsa consequuntur quia asperiores laudantium 
                        expedita inventore minus beatae tempore ipsum error 
                        nulla at voluptatibus illo totam</p>
                </div>
                <img src="view/images/escuela.png">
            <?php } else { ?>
                    <h1>Bienvenido <?php echo $username ?></h1>
                    <p>parrafo de bienvenida parrafo de bienvenida parrafo de bienvenida</p>
                </div>
                <img src="../images/escuela.png">
            <?php } ?>

        </section>

        <section class="olas">
            <div class="wave wave1"></div>
            <div class="wave wave2"></div>
            <div class="wave wave3"></div>
            <div class="wave wave4"></div>
        </section>

        <!--  <section class="Two">
        
            <div class="info border1">
                <img 
                    src=<?php  
                            if(!isset($_SESSION['user_id'])){
                                echo "view/images/base-de-datos.png";
                            } else {
                                    echo "../images/base-de-datos.png";
                            } ?>
                    class="temp"
                >
                <h3>Consulta datos</h3>
            </div>

            <div class="info border2">
                <img src=<?php  
                            if(!isset($_SESSION['user_id'])){
                                echo "view/images/base-de-datos1.png";
                            } else {
                                    echo "../images/base-de-datos1.png";
                            } ?>
                     class="temp"
                >
                <h3>Ingresa datos</h3>
            </div>

            <div class="info border3">
                <img src=<?php 
                            if(!isset($_SESSION['user_id'])){
                                echo "view/images/sencillo-formato-de-datos.png";
                            } else {
                                    echo "../images/sencillo-formato-de-datos.png";
                            } ?>
                     class="temp">
                <h3>Ve estadísticas</h3>
            </div>
        </section> -->
        
        <div class="menu">
            <div class="header">
                <h1 class="titleHeader">Reliable, efficient delivery</h1>
                <h1 class="titleHeader">Powered by Technology</h1>

                <p>Our Artificial Intelligence powered tools use millions 
                    of project data points to ensure that your project is successful</p>
            </div>

            <div class="row1-container">
                <div class="box box-down cyan">
                    <h2 class="h2">Supervisor</h2>
                    <p>Monitors activity to identify project roadblocks</p>
                    <img src="https://assets.codepen.io/2301174/icon-supervisor.svg" alt="">
                </div>

                <div class="box red">
                    <h2 class="h2">Team Builder</h2>
                    <p>Scans our talent network to create the optimal team for your project</p>
                    <img src="https://assets.codepen.io/2301174/icon-team-builder.svg" alt="">
                </div>

                <div class="box box-down blue">
                    <h2 class="h2">Calculator</h2>
                    <p>Uses data from past projects to provide better delivery estimates</p>
                    <img src="https://assets.codepen.io/2301174/icon-calculator.svg" alt="">
                </div>
            </div>
            
            <div class="row2-container">
                <div class="box orange">
                    <h2 class="h2">Karma</h2>
                    <p>Regularly evaluates our talent to ensure quality</p>
                    <img src="https://assets.codepen.io/2301174/icon-karma.svg" alt="">
                </div>
            </div>
        </div>