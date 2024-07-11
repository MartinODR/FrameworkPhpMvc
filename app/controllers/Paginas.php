<?php

class Paginas
{
    public function __construct()
    {
       echo 'Controlador Paginas Cargado<br>';
    }

    public function index()
    {
      
    }

    public function articulo()
    {

    }

    public function actualizar($num_registro)
    {
        echo $num_registro;
    }
}