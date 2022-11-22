<?php
class Datos
{
    private $mysqli;
    //Variables de objeto
    private $data;

    //Conectar y crear una matriz
    public function __construct()
    {
        $this->mysqli= Connection::conexion1();
        $this->data=array();
    }

    //devuelve datos de la base de datos
    public function getData1($sql)
    {
        //Result es una matriz 
        $result = $this->mysqli->query($sql);
        //fetch object coje como objeto todos los valores de el resultado y los pasa a un objeto, en este caso rows
        while($rows=$result->fetch_object())
        {
            $this->data[] = $rows;
        }
        $result->close();
        $this->mysqli->close();
        return $this->data;

    }

}


?>