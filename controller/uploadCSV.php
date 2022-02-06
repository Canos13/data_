<?php
    require("../model/BD.php");
    $ruta="Upload/";

    foreach($_FILES as $key){

        $nombre = $key['name'];
        $ruta_temp = $key['tmp_name'];

        $fecha=getdate();
		$nombre_v=$fecha["mday"]."-".$fecha["mon"]."-".$fecha["year"]."_".$fecha["hours"]."-".$fecha["minutes"]."-".$fecha["seconds"].".csv";		

		$destino=$ruta.$nombre_v;
		$explo=explode(".",$nombre);

        if($explo[1] != "csv"){
			$alert=1;
		}else{
			if(move_uploaded_file($ruta_temp, $destino)){
				$alert=2;
			}
		}
    }

    $x=0;
	$data=array();
	$fichero=fopen($destino, "r");
    $bd = new BD();
	while(($datos= fgetcsv($fichero,1000)) != FALSE){
		$x++;
		if($x>1){
            
                print_r("<pre>");
                    print_r($datos);
                print_r("</pre>");
            
                $bd->insertarDatosEnTabla(implode(",",$datos));
                /* 
                (5, gdgfd,6573)
                (2,'sdsfs',453) */
           } 
	}

?>