<?php

$textConsulta1 = empty($_POST['textFacturaVenta1']) ? '' : $_POST['textFacturaVenta1'];
$textConsulta2 = empty($_POST['idPedidoFacturaVenta']) ? '' : $_POST['idPedidoFacturaVenta'];



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

$buscaproducto = "select * from factura_venta where id_pedido='$textConsulta2'";
$data = $objData->getData1($buscaproducto);

if(empty($data))
{
    echo"
    <div class='bloque1'>
    No hay datos
    
    </div>
    ";
    echo $textConsulta2."hola";
}else{
    echo"
    <div class='bloque0'>
        <div class='bloque1'>
            <h1>Detalles del pedido $textConsulta2</h1>
        </div>
    </div>

    <div class='bloque0'>
    <div class='bloque1'><h1 class='border'>ID Producto</h1></div>
    <div class='bloque1'><h1 class='border'>Cantidad</h1></div>
    <div class='bloque1'><h1 class='border'>Precio unitario</h1></div>
    <div class='bloque1'><h1 class='border'>Total</h1></div>
    </div>
    ";
    foreach($data as $row)
    {
        echo"
        <div class='bloque0'>
            <div class='bloque1'>$row->id_producto</div>
            <div class='bloque1'>$row->cantidad</div>
            <div class='bloque1'>$row->pvp_unitario</div>
            <div class='bloque1'>$row->total</div>
        </div>
        "; 
    }
}
?>
