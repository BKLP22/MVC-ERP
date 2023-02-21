<?php

    /* INICIO - Tratamiento de los input type='text' */
    $id = $_GET['id'];
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
    $sql = "SELECT * FROM productos where id_producto='$id'";

    $data = $oData->getData1($sql);
    
    if(empty($data))
    {
        echo"
            <div class='bloque1 negrita'>
                No hay datos.
                $id
            </div>
        ";
    }
    else
    {
        foreach ($data as $row)
        {
            $id_producto = $row->id_producto;
            $precio_unitario = $row->precio_unitario;
            $pvp = $row->pvp;
            $modelo = $row->modelo;
            $marca = $row->marca;
            $categoria = $row->categoria;
            $descripcion = $row->descripcion;
            $stock = $row->stock;
        }
    }
?>