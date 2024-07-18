<?php
//Ruta de la Aplicacion //Definiendo como constantes
//define() Php creacion de constantes, para luego midificar en la creacion de proyectos 

//configuracion de acceso a la base de datos 
//test .gitignore testing if this are commited new test 2 
// this is not working //checking again if this is F-working

define('DB_HOST', 'localhost');
define('DB_USUARIO', 'User');
define('DB_PASSWORD', 'Password');
define('DB_NOMBRE', 'Database');

//echo dirname(dirname(__FILE__));  //test dirname me permite devolverme a la categoria padre(retrocede una carpeta)

define('RUTA_APP', dirname(dirname(__FILE__))); //se define la ruta de nuestra aplicacion, se define como constante

//Ruta URL Ejemplo: http://localhost/FrameworkPhpMvc/

    define('RUTA_URL', 'http://localhost/FrameworkPhpMvc' ); //RUTA_URL 

    define('NOMBRESITIO', '_NOMBRE_SITIO');



