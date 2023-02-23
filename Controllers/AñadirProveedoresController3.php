<?php
$id_proveedor = empty($_POST['dni']) ? '' : $_POST['dni'];
$nombre = empty($_POST['nombre']) ? '' : $_POST['nombre'];
$correo = empty($_POST['correo']) ? '' : $_POST['correo'];
$cp = empty($_POST['cp']) ? '' : $_POST['cp'];
$iban = empty($_POST['iban']) ? '' : $_POST['iban'];
$telefono = empty($_POST['telefono']) ? '' : $_POST['telefono'];


if(file_exists("../Db/Con1Db.php"))
{
    // Llamada a la conexion
    require_once "../Db/Con1Db.php";
    // Llamada al modelo
    require_once "../Models\Datos1Model.php";
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

$sql1 = "INSERT INTO proveedores(id_proveedor,nombre,correo,cp,iban,tlf) VALUES (?,?,?,?,?,?)";
$data = $oData->setDataPreparedStatements6($sql1,$id_proveedor,$nombre,$correo,$cp,$iban,$telefono);

?>