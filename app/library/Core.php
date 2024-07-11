<?php
//traer url que se escriba en el navegador 
/*Mapear la URL ingresada en el navegador
1-Controlador 
2-Metodo 
3-Parametro
Ejemplo: /articulos/actualizar/4
*/

class Core
{
    protected $controladorActual = 'Paginas';
    protected $metodoActual = 'index';
    protected $parametros = [];

    //constructor 
    public function __construct()
    {
        // print_r($this->getUrl());  //test output:Array from explode() controller, method, parameter   
        $url = $this->getUrl();    //test output: url
        //buscar en controladores si el controlador existe, si existe lo carga, si no carga el controlador por defecto 'Paginas'
        if (file_exists('../app/controllers/' .ucwords($url[0]).'.php')) {  //ucwords()toma del array[0] y lo incluye en la direccion 
            //si existe se setea como controlador por defecto 
            $this->controladorActual = ucwords($url[0]);  

            //unset indice [0]
            unset($url[0]);  //desmontar el controlador actual 
        }
        //requerir el controlador nuevo
        require_once('../app/controllers/'.$this->controladorActual.'.php');
        $this->controladorActual = new $this->controladorActual;
    
        //chequear la segunda parte de la url que seria el metodo
        if(isset($url[1]))  //si se seteo el indice[1]
        {
            if(method_exists($this->controladorActual, $url[1]))
            {
                 //chequeamos el metodo
                $this->metodoActual = $url[1];
                 //unset indice [1]
                unset($url[1]);  //desmontar el metodo actual 
            }
        }
       // echo $this->metodoActual; //test:  traer metodo 

       //obtener los posibles parametros 

    }

    public function getUrl()  
    {
       // echo $_GET['url']; //imprimir en pantalla la url que se escriba

       if(isset($_GET['url']))        //evaluar si la url esta configurada
       {
            $url = rtrim($_GET['url'], '/');     //quitar espacios hacia la derecha que pueda tener casa ('/')
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);           //delimitador:(/), String: url
            return $url;
        } 
    }


}