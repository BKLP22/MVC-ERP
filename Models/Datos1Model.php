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

    
      // No devuelve datos de la BD (insert, update, delete con consultas preparadas)
      public function login($sql, $nom_usu, $con_usu)
      {
          $nom_usu = $this->mysqli->real_escape_string($nom_usu);
          $con_usu = $this->mysqli->real_escape_string($con_usu);

          $stmt = $this->mysqli->prepare($sql);
          $stmt->bind_param("ss", $nom_usu, $con_usu); // ssis = string, string, integer, string
          
          if(!$stmt->execute())
          {
              $respuesta=0;
          }
          else
          {
            $resultado = $stmt->get_result();
            $numeroRegistros = $resultado->num_rows;
            if($numeroRegistros)
            {
                  
                  //Acceso aceptado
                  //Iniciamos una nueva sesion
                  session_start();
                  //Cargar las variables de sesion
                  $_SESSION['autenticado']="true";
                  while($fila = $resultado->fetch_assoc())
                  {
                      $_SESSION['ide_usu']=$fila['ide_usu'];
                      $_SESSION['nom_usu']=$fila['nom_usu'];
                      $_SESSION['tip_usu']=$fila['tip_usu'];
                     
                  }
                  //devuelve 1 a autenticar1 en motor.js (Acceso aceptado)
                  $respuesta=1;
              }
              else
              {
                  $respuesta=0;
              } 
              //Liberar el conjunto de resultados
              $resultado->free();
              //Cerrar la conexion
              $this->mysqli->close();
              return $respuesta;
          }
      }
}
?>