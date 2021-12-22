
    <section class="main">
        <section class="One">
                <div class="text">
            <?php  if(!isset($_SESSION['user_id'])){ ?>
                    <h1>Crea tu sitio con tus datos</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere unde, sed similique in ipsa consequuntur quia asperiores laudantium expedita inventore minus beatae tempore ipsum error nulla at voluptatibus illo totam</p>
                </div>
                <img src="view/images/escuela.png">
            <?php } else { ?>
                    <h1>Bienvenido <?php echo $username ?></h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere unde, sed similique in ipsa consequuntur quia asperiores laudantium expedita inventore minus beatae tempore ipsum error nulla at voluptatibus illo totam</p>
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

        <section class="Two">
            <div class="info border1">
                <?php  if(!isset($_SESSION['user_id'])){ ?>
                    <img src="view/images/base-de-datos.png" class="temp">
                <?php } else { ?>
                    <img src="../images/base-de-datos.png" class="temp">
                <?php } ?>
                <h3>Consulta datos</h3>
            </div>
            <div class="info border2">
                <?php  if(!isset($_SESSION['user_id'])){ ?>
                    <img src="view/images/base-de-datos1.png" class="temp">
                <?php } else { ?>
                    <img src="../images/base-de-datos1.png" class="temp">
                <?php } ?>
                <h3>Ingresa datos</h3>
            </div>
            <div class="info border3">
                <?php  if(!isset($_SESSION['user_id'])){ ?>
                    <img src="view/images/sencillo-formato-de-datos.png" class="temp">
                <?php } else { ?>
                    <img src="../images/sencillo-formato-de-datos.png" class="temp">
                <?php } ?>
                <h3>Ve estadisticas</h3>
            </div>
        </section>