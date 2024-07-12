<?php

class Paginas extends Controller
{
    public function __construct()
    {
       echo 'Controlador Paginas Cargado<br>';
    }

    public function index()
    {
      $this->vista('paginas/inicio');
    }

    public function articulo()
    {

    }

    public function actualizar($num_registro)
    {
        echo $num_registro;
    }
}