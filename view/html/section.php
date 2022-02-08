<?php require "../helpers/cabecera.php"; ?>
<?php require "../../model/BD.php"; ?>
<?php require "../../model/Categoria.php"; ?>
    <link rel="stylesheet" href="../css/styles.css">
    <title>Ver sección</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<?php 
    session_start();
    $band = 1;
    require "../helpers/navbar.php";  

    $bd = new BD();
    $categoria = new Categoria();

    $categoria = $bd->consultarCategorias();

    foreach($categoria as $cate){
        $numColTablaActual = $bd->numColumnas(($cate->getName()));

        if($numColTablaActual > 2){ 
            $columName = $bd->nombreCols(($cate->getName()));
            $primerCol = $columName[1];
            $segundaCol = $columName[2];
            
            $datosPrimeraCol = $bd->datosCols(($cate->getName()), $primerCol);
            $datosSegundaCol = $bd->datosCols(($cate->getName()), $segundaCol); ?>
           
           <canvas id="<?php echo $cate->getName(); ?>" width="400" height="120"></canvas>
            <script>
                var ctx = document.getElementById("<?php echo $cate->getName(); ?>");
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        datasets: [{
                            label: '<?php echo $cate->getName(); ?>',
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });

                <?php
                    foreach($datosPrimeraCol as $primera){ ?>
                        myChart.data['labels'].push(<?php  echo "'$primera'";  ?>);
                <?php  } 

                    foreach($datosSegundaCol as $segunda){ ?>
                        myChart.data['datasets'][0].data.push(<?php echo $segunda; ?>);
                <?php  } ?>

            </script>

        <?php }
    }
?>
    