<?php

    /* INICIO - Tratamiento de los input type='text' */
    $idProveedor = $_GET['idproveedor'];
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
    $sql = "SELECT * FROM proveedores where id_proveedor='$idProveedor'";

    $data = $oData->getData1($sql);
    
    if(empty($data))
    {
        echo"
            <div class='bloque1 negrita'>
                No hay datos.
                $idProveedor
            </div>
        ";
    }
    else
    {
        foreach ($data as $row)
        {
            $idProveedor = $row->id_proveedor;
            $nombre = $row->nombre;
            $cp = $row->cp;
            $correo = $row->correo;
            $tlf = $row->tlf;
            $iban = $row->iban;
        }
    }
?>