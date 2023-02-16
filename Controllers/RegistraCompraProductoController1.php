<?php

$idPedido = empty($_POST['idDetalles']) ? '' : $_POST['idDetalles'];
$modelo = empty($_POST['modelo']) ? '' : $_POST['modelo'];
$marca = empty($_POST['marca']) ? '' : $_POST['marca'];
$categoria = empty($_POST['categoria']) ? '' : $_POST['categoria'];
$stock = empty($_POST['stock']) ? '' : $_POST['stock'];
$precioUnitario = empty($_POST['preciocompra']) ? '' : $_POST['preciocompra'];
$pvp = empty($_POST['precioventa']) ? '' : $_POST['precioventa'];
$desc = empty($_POST['descripcion']) ? '' : $_POST['descripcion'];

echo $idPedido;


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

$total = $precioUnitario*$stock;

$sql1 = "INSERT INTO factura_compra(id_compra,cantidad,precio_unitario,total) VALUES (?,?,?,?)";
$data = $oData->setDataPreparedStatements4($sql1,$idPedido,$stock,$precioUnitario,$total);


?>