<?php

$id_producto = empty($_POST['id']) ? '' : $_POST['id'];
$precio_unitario = empty($_POST['preciocompra']) ? '' : $_POST['preciocompra'];
$pvp = empty($_POST['precioventa']) ? '' : $_POST['precioventa'];
$modelo = empty($_POST['modelo']) ? '' : $_POST['modelo'];
$marca = empty($_POST['marca']) ? '' : $_POST['marca'];
$categoria = empty($_POST['categoria']) ? '' : $_POST['categoria'];
$descripcion = empty($_POST['descripcion']) ? '' : $_POST['descripcion'];
$stock = empty($_POST['stock']) ? '' : $_POST['stock'];


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
$sql1 = "UPDATE productos SET id_producto=?, precio_unitario=?, pvp=?, modelo=?, marca=?,categoria=?,descripcion=?,stock=? where id_producto='$id_producto'";
$data = $oData->setDataPreparedStatements8($sql1,$id_producto, $precio_unitario,$pvp, $modelo, $marca, $categoria,$descripcion,$stock);
    
echo $data;


?>