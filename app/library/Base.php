<?php
    //Clase para conectarse a la base de datos y ejecutar consultas 
    //PDO 

    class Base
    {
        private $host= DB_HOST;
        private $usuario= DB_USUARIO;
        private $password= DB_PASSWORD;
        private $nombre_base= DB_NOMBRE;

        private $dbh;  //database handler 
        private $stmt; //statement , ejecutar consulta
        private $error;

        public function __construct(){
            //configurar conexion 
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->nombre_base;

            $opciones= array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

            //Crear una instancia de PDO// Conexion y captura de error 
            try{
                $this->dbh= new PDO($dsn, $this->usuario, $this->password, $opciones); 

                $this->dbh->exec('set names utf8');  //arreglar caracteres espaniol
            
                echo "Conexion Exitosa";

            }catch(PDOException $e){
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }

        //Recibir sentencia y prepararla //Preparamos la consulta 
        public function query($sql){        
            $this->stmt = $this->dbh->prepare($sql);
        }

        //aqui se establecen parametros//Vinculamos la consulta con bind 
        public function bind($parametro, $valor, $tipo = null){
            if(is_null($tipo)){
                switch(true){                           //se puede utilizar if() pero es mas apropiado utilizar
                    case is_int($valor):                //la estructura de control  switch()
                        $tipo = PDO::PARAM_INT;
                    break;
                    case is_bool($valor):
                        $tipo = PDO::PARAM_BOOL;
                    break;
                    case is_null($valor):
                        $tipo = PDO::PARAM_NULL;
                    break;
                    default: 
                        $tipo = PDO::PARAM_STR;
                    break;
                }
            }
            $this->stmt->bindValue($parametro, $valor, $tipo);
        }
        //ahora crear la funcion para ejecutar la consulta //Ejecuta la consulta
        
        public function execute(){
           return $this->stmt->execute();

        }

        //Obtener los registros de la consulta
        //llama a la funcion ejecutar de Php y retorna ese valor como un objeto 
        public function registros(){
            $this->execute();
            return $this->stmt->fetchAll(PDO::FETCH_OBJ); //como son todos los registros un array se utiliza fetchAll
        }

        //Obtener un unico registro 
        public function registro(){
            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_OBJ);
        }

        //obtener la cantidad de registros(numero de filas)con el rowCount
        public function rowCount(){
            return $this->stmt->rowCount();
        }
    }

