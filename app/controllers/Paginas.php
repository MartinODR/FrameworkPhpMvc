<?php

class Paginas extends Controller
{
  public function __construct()
  {
    
    // echo 'Controlador Paginas Cargado<br>';
  }

  public function index()
  {
    $datos= [
      'titulo' => 'Carga de app/controllers/Paginas/index, Metodo:index(), $datos[titulo]',  //index metodo 
      
    ];

    $this->vista('paginas/inicio', $datos);
  }

    
    
}

