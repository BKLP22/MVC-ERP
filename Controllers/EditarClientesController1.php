<?php

    /* INICIO - Tratamiento de los input type='text' */
    $dni = $_GET['dni'];
    /* FIN - Tratamiento de los input type='text' */

    if(file_exists("../Db/Con1Db.php"))
    {
        // Llamada a la conexion
        require_once "../Db/Con1Db.php";
        // Llamada al modelo
        require_once "../Models/Datos1Model.php";
    }
    elseif(file_exists("Db/Con1Db.php"))
    {
        // Llamada a la conexion
        require_once "Db/Con1Db.php";
        // Llamada al modelo
        require_once "Models/Datos1Model.php";
    }

    // Instanciacion del objeto
    $oData = new Datos;
    // Llamada al metodo
    $sql = "SELECT * FROM clientes where dni='$dni'";

    $data = $oData->getData1($sql);
    
    if(empty($data))
    {
        echo"
            <div class='bloque1 negrita'>
                No hay datos.
                $dni
            </div>
        ";
    }
    else
    {
        foreach ($data as $row)
        {
            $dni = $row->dni;
            $nombre = $row->nombre;
            $apellido = $row->apellido;
            $cp = $row->cp;
            $correo = $row->correo;
            $tlf = $row->tlf;
            $iban = $row->iban;
        }
    }
?>