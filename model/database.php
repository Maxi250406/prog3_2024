<?php

class Database{
    private $conexion = null;
    private $nombre = "db_school";
    private $servidor = "localhost";
    private $usuario = "root";
    private $clave = "#Promo2024";

    // Conectar a la base de datos.
    public function __construct(){
        $this->conexion = new mysqli($this->servidor, $this->usuario, $this->clave, $this->nombre);
        if ($this->conexion->connect_error){
            echo "Fallo la conexión: " . $this->conexion->connect_error;
        }
    }

    // Ejecutar una consulta en la base de datos.
    public function query($sql){
        $this->conexion->query($sql);
    }

    // Cerrar la conexión a la base de datos.
    public function closeDB(){
        $this->conexion->close();
    }
}

?>
