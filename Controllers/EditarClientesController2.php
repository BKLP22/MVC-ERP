<?php

$dni = empty($_POST['textEdicionClientes1']) ? '' : $_POST['textEdicionClientes1'];
$nombre = empty($_POST['textEdicionClientes2']) ? '' : $_POST['textEdicionClientes2'];
$apellido = empty($_POST['textEdicionClientes3']) ? '' : $_POST['textEdicionClientes3'];
$cp = empty($_POST['textEdicionClientes4']) ? '' : $_POST['textEdicionClientes4'];
$correo = empty($_POST['textEdicionClientes5']) ? '' : $_POST['textEdicionClientes5'];
$tlf = empty($_POST['textEdicionClientes6']) ? '' : $_POST['textEdicionClientes6'];

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
$sql1 = "UPDATE clientes SET dni=?, nombre=?, apellido=?, cp=?, correo=?,tlf=? where dni='$dni'";
$data = $oData->setDataPreparedStatements6($sql1,$dni, $nombre,$apellido, $cp, $correo, $tlf);
    
echo $data;


?>