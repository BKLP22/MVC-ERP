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

    // No devuelve datos de la BD (insert, update, delete)
    public function setData1($sql)
    {
        if(!$this->mysqli->query($sql))
        {
            $result = "La operacion no se ha podido realizar.";
            // echo "Detalle del error en la consulta (setData1) - ";
            // echo "Numero del error: " . $this->mysqli->errno . " - ";
            // echo "Descripcion del error: " . $this->mysqli->error;
        }
        else
        {
            $result = "Operacion realizada con exito";
        }
        $this->mysqli->close();
        return $result;
    }

        // No devuelve datos de la BD (insert, update, delete con consultas preparadas)
    public function setDataPreparedStatements4($sql, $par1, $par2, $par3, $par4)
    {
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param("ssss", $par1, $par2, $par3, $par4); // ssi = string, string, integer
            
        if(!$stmt->execute())
        {
            // $result = "La operacion no se ha podido realizar.";
            // echo "Detalle del error en la consulta (setData1) - ";
            // echo "Numero del error: " . $this->mysqli->errno . " - ";
            // echo "Descripcion del error: " . $this->mysqli->error;
        }
        else
        {
            $result = "Operacion realizada con exito";
        }
        $this->mysqli->close();
        return $result;
    }

    public function setDataPreparedStatements6($sql, $par1, $par2, $par3, $par4, $par5, $par6)
    {        

        $stmt = $this->mysqli->prepare($sql);

        $stmt->bind_param("ssssss", $par1, $par2, $par3, $par4, $par5, $par6); 

            
        if(!$stmt->execute())
        {
            // $result = "La operacion no se ha podido realizar.";
            // echo "Detalle del error en la consulta (setData1) - ";
            // echo "Numero del error: " . $this->mysqli->errno . " - ";
            // echo "Descripcion del error: " . $this->mysqli->error;
        }
        else
        {
            $result = "Operacion realizada con exito";
        }
        $this->mysqli->close();
        return $result;
    }
}
?>