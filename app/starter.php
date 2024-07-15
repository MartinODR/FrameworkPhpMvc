<?php
    echo "Hello Starter<br>";


    require_once 'config/configurar.php';  //creado en etapa autoLoader


//Estas Clases que estan en Library son cargadas con el autoLoader
   /* require_once 'library/Base.php';
    require_once 'library/Controller.php';
    require_once 'library/Core.php'; */


    //AutoLoader PHP, El nombre de la Clase debe coincidir exactamente con el nombre de la Clase 

    spl_autoload_register(function($nombreClase){

        require_once('library/' . $nombreClase . '.php');  //debe buscar en librerias $nombreClase

    }
    );
?>