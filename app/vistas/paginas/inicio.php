<?php
require(RUTA_APP . '/vistas/inc/header.php');

echo "<h1><br/>Carga de prueba inicio Vistas</br></h1>";//Test

echo "<h1></br>" . $datos['titulo'] . "</br></h1>";//Test

echo "<h3></br>" . RUTA_APP . " :constante RUTA_APP desde app/config/configurar.php </h3></br>";//Test

require(RUTA_APP . '/vistas/inc/footer.php');
?>