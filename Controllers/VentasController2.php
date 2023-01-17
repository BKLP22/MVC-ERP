<?php

$textConsulta1 = empty($_POST['textConsultaVentas1']) ? '' : $_POST['textConsultaVentas1'];

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

$objData = new Datos;

$buscarcliente = "select * from envio where id_pedido like '%$textConsulta1%'";
$data = $objData->getData1($buscarcliente);

if(empty($data))
{
    echo"
    <div class='bloque1'>
    No hay datos
    </div>
    ";
}else{
    echo"
    <div class='bloque0'>
    <div class='bloque1'><h1 class='border'>NºPedido</h1></div>
    <div class='bloque1'><h1 class='border'>Total</h1></div>
    <div class='bloque1'><h1 class='border'>DNI Cliente</h1></div>
    <div class='bloque1'><h1 class='border'>Fecha venta</h1></div>
    <div class='bloque1'><h1 class='border'>Fecha envio</h1></div>
    <div class='bloque1'><h1 class='border'>Direccion</h1></div>
    <div class='bloque1'><h1 class='border'>Detalles</h1></div>

    </div>
    ";
    foreach($data as $row)
    {
        echo"
        <div class='bloque0'>
            <div class='bloque1'>$row->id_pedido</div>
            <div class='bloque1'>$row->total</div>
            <div class='bloque1'>$row->dni_cliente</div>
            <div class='bloque1'>$row->fecha_venta</div>
            <div class='bloque1'>$row->fecha_envio</div>
            <div class='bloque1'>$row->direccion</div>
            <div class='bloque1'><a href='detalles_venta.php?idPedido=$row->id_pedido' class='enlaces2'>Detalles</a></div>

        "; 
    }
}
?>
