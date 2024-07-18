<?php
//Clase controlador principal
//se encarga de cargar los modelos y las vistas

    class Controller
    {
        //Cargar modelo 
        public function modelo($modelo)
        {
        //carga
        require_once '../app/modelos/' . $modelo . '.php';
        //Instanciar el modelo 
        return new $modelo();
        }
        
        //Cargar vista 
        public function vista($vista, $datos = [])
        {
        //chequear si el archivo vista existe 
            if(file_exists('../app/vistas/' . $vista . '.php'))  //si existe 
            {
                require_once '../app/vistas/' . $vista . '.php' ;  //requerirlo
            }else{
                //si no existe el archivo de la vista 
                die('La vista no existe');
            }

        }
    }
