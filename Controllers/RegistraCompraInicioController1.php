<?php

$fechaCompra1 = empty($_POST['textRegistrarCompra1']) ? '' : $_POST['textRegistrarCompra1'];
$proveedorCompra1 = empty($_POST['listaProveedores1']) ? '' : $_POST['listaProveedores1'];


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

$sql1 = "INSERT INTO compras(id_proveedor,fecha_compra,precio,coste_logistico) VALUES (?,?,null,null)";
$data = $oData->setDataPreparedStatements2($sql1,$proveedorCompra1,$fechaCompra1);

$oData1 = new Datos;

$sql2 = "SELECT id_compra from compras ORDER BY id_compra DESC LIMIT 1";
$data2 = $oData1->getData1($sql2);

if(empty($data2))
{
    echo"
    <div class='bloque1'>
    No hay datos
    
    </div>
    ";
    echo $textConsulta2."hola";
}else{
    foreach($data2 as $row)
    {
        echo $row->id_compra;
    }
}

?>