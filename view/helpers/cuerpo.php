
    <section class="main">
        <section class="One">
                <div class="text">
            <?php if(!isset($_SESSION['user_id'])){ ?>
                    <h1>Crea tu sitio con tus datos</h1>
                    <p>Duda siempre de ti mismo, hasta que los datos 
                        no dejen lugar a dudas (Louis Pasteur)</p>
                </div>
                <img src="view/images/butlerm.gif">
            <?php } else { ?>
                    <h1>Bienvenido <?php echo $username ?></h1>
                    <p>“Los números tienen una historia importante que contar.   
                        Dependen de ti, para darles una voz. “- Stephen Few
                        </p>
                </div>
                <img src="../images/butlerm.gif">
            <?php } ?>

        </section>

        <section class="olas">
            <div class="wave wave1"></div>
            <div class="wave wave2"></div>
            <div class="wave wave3"></div>
            <div class="wave wave4"></div>
        </section>

       
        
        <div class="menu">
            <div class="header">
                <h1 class="titleHeader">Usa y disfruta</h1>
                <h1 class="titleHeader">GrafCan</h1>

                <p>Esta es una herramienta interactiva, adaptada a tus necesidades, permitiendo crear, consultar y visualizar 
información estadística.</p>
            </div>

            <div class="row1-container">
                <div class="box box-down cyan">
                    <h2 class="h2">Consultar</h2>
                    <p>Consulta la información</p>
                    <img src="https://assets.codepen.io/2301174/icon-supervisor.svg" alt="">
                </div>

                <div class="box red">
                    <h2 class="h2">Crear</h2>
                    <p>Crea secciones personalizadas</p>
                    <img src="https://assets.codepen.io/2301174/icon-team-builder.svg" alt="">
                </div>

                <div class="box box-down blue">
                    <h2 class="h2">Visualizar</h2>
                    <p>Visualiza gráficos estadísticos</p>
                    <img src="https://assets.codepen.io/2301174/icon-calculator.svg" alt="">
                </div>
            </div>
            
            <div class="row2-container">
                <div class="box orange">
                    <h2 class="h2">Subir</h2>
                    <p>Sube archivos con tus datos</p>
                    <img src="https://assets.codepen.io/2301174/icon-karma.svg" alt="">
                </div>
            </div>
        </div>