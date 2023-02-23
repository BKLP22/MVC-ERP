<?php
$id = empty($_POST['id']) ? '' : $_POST['id'];
$idPedido = empty($_POST['idDetalles']) ? '' : $_POST['idDetalles'];
$modelo = empty($_POST['modelo']) ? '' : $_POST['modelo'];
$marca = empty($_POST['marca']) ? '' : $_POST['marca'];
$categoria = empty($_POST['categoria']) ? '' : $_POST['categoria'];
$stock = empty($_POST['stock']) ? '' : $_POST['stock'];
$precioUnitario = empty($_POST['preciocompra']) ? '' : $_POST['preciocompra'];
$pvp = empty($_POST['precioventa']) ? '' : $_POST['precioventa'];
$desc = empty($_POST['descripcion']) ? '' : $_POST['descripcion'];
$final=0;

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
$oData2 = new Datos;

$total = $precioUnitario*$stock;

$sql1 = "INSERT INTO factura_compra(id_compra, id_producto,cantidad,precio_unitario,total) VALUES (?,?,?,?,?)";
$data = $oData->setDataPreparedStatements5($sql1,$idPedido,$id,$stock,$precioUnitario,$total);

$sql2 = "INSERT INTO productos (id_producto,precio_unitario,pvp,modelo,marca,categoria,descripcion,stock,final) VALUES (?,?,?,?,?,?,?,?,?)";
$data = $oData2->setDataPreparedStatements9($sql2,$id,$precioUnitario,$pvp,$modelo,$marca,$categoria,$desc,$stock,$final);

?>