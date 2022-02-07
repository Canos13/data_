<?php
    require("../model/BD.php");
    $ruta="Upload/";
    $idTabla = $_POST['idCate'];

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

    $i=0;
	$data=array();
	$fichero=fopen($destino, "r");
    $bd = new BD();
	while(($datos= fgetcsv($fichero,1000)) != FALSE){
		$i++;
		if($i>1){
                $arrDatos = array();
                foreach($datos as $data){
                    if(is_numeric($data)){
                        array_push($arrDatos, floatval($data));
                    } else {
                        array_push($arrDatos, "'$data'");
                    }
                } 
                $bd->insertarDatosEnTabla((implode(",",$arrDatos)), $idTabla);
           }
	}

    header("location: ../view/html/create.php");

?>