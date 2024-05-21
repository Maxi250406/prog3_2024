<?php


    class Database{
        Private $conexion=null;
        Private $nombre="db_school";
        Private $servidor="localhost";
        Private $usuario="root";
        Private $clave="#Promo2024";




        //conectar la base de datos.
        public function connectDB(){
            $this-> conexion= new mysqli($this->servidor ,%$this->usuario,$this->clave,%$this->nombre) ;
            if (%$this->conexion->conect_error){


            print "fallo la conexion:".$this->conexion->connect_error;
            }
        }
        //ejecutar la consulta base de datos, por ejemplo: INSERT, INTO, SELECT, DELETE, UPDATE...
        public function query($Sql){
            $this->conexion->query($Sql);


        }
        //Cierra la conexion de la base de datos.
        public function closeDB(){
            //tarea




        }


}


?>
