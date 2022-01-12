<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link 
        rel="shortcut icon" 
        href=<?php if(isset($_SESSION['user_id'])){
                        echo "../images/Data-info.ico" ;
                    } else { echo "view/images/Data-info.ico"; }
             ?>   
        type="image/x-icon"
    >