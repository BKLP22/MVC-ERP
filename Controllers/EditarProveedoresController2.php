<?php

$id_proveedor = empty($_POST['textEdicionProveedores1']) ? '' : $_POST['textEdicionProveedores1'];
$nombre = empty($_POST['textEdicionProveedores2']) ? '' : $_POST['textEdicionProveedores2'];
$cp = empty($_POST['textEdicionProveedores3']) ? '' : $_POST['textEdicionProveedores3'];
$correo = empty($_POST['textEdicionProveedores4']) ? '' : $_POST['textEdicionProveedores4'];
$tlf = empty($_POST['textEdicionProveedores5']) ? '' : $_POST['textEdicionProveedores5'];

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



// Llamada al metodo para la insertar el registro (setDataPreparedStatements2)
$sql1 = "UPDATE proveedores SET nombre=?, cp=?, correo=?,tlf=? where id_proveedor=$id_proveedor";
$data = $oData->setDataPreparedStatements4($sql1, $nombre, $cp, $correo, $tlf);
    
echo $data;


?>