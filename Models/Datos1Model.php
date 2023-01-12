<?php
class Datos
{
    private $mysqli;
    //Variables de objeto
    private $data;

    //Conectar y crear una matriz
    public function __construct()
    {
        $this->mysqli= Connection::conn1();
        $this->data=array();
    }

    //devuelve datos de la base de datos
    public function getData1($sql)
    {
        $result = $this->mysqli->query($sql);
        while($rows=$result->fetch_object())
        {
            $this->data[]=$rows;
        }
        $result->close();
        $this->mysqli->close();
        return $this->data;
    }

}
?>