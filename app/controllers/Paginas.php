<?php

class Paginas extends Controller
{
    public function __construct()
    {
       echo 'Controlador Paginas Cargado<br>';
    }

    public function index()
    {
      $datos= [
        'titulo' => 'Carga de app/controllers/Paginas/index, Metodo:index(), $datos[titulo]'  //index metodo 
      ];

      $this->vista('paginas/inicio', $datos);
    }

    public function articulo()
    {
      $this->vista('paginas/articulo');
    }

    public function actualizar($num_registro)
    {
        echo $num_registro;
    }
}