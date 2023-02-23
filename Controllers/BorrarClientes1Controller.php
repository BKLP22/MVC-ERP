<?php

    $idcliente = empty($_POST['textEdicionClientes1']) ? '' : $_POST['textEdicionClientes1'];

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
    //echo $idproveedor;
    $borrado = 1;
    // Llamada al metodo
    $sql = "UPDATE clientes SET borrado=? where dni='$idcliente'";

    $data = $oData->setDataPreparedStatements1($sql, $borrado );

    echo "Cliente actualizado";


?>