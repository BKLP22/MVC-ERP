<?php

$fechaCompra1 = empty($_POST['fechaVenta1']) ? '' : $_POST['fechaVenta1'];
$clienteCompra1 = empty($_POST['listaClientes1']) ? '' : $_POST['listaClientes1'];


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

$sql1 = "INSERT INTO envio(total,dni_cliente,coste_envio,tiempo_estimado,tiempo_real,fecha_venta,fecha_envio,direccion) VALUES (null,?,null,null,null,?,null,null)";
$data = $oData->setDataPreparedStatements2($sql1,$clienteCompra1,$fechaCompra1);

$oData1 = new Datos;

$sql2 = "SELECT id_pedido from envio ORDER BY id_pedido DESC LIMIT 1";
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