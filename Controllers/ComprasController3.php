<?php

$idCompra = $_GET['idCompra'];

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

$buscaproducto = "select * from factura_compra where id_compra=$idCompra";
$data = $objData->getData1($buscaproducto);

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
        <div class='bloque1'>
            <h1>Detalles de la compra $idCompra</h1>
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
            <div class='bloque1'>$row->precio_unitario</div>
            <div class='bloque1'>$row->total</div>
        </div>
        "; 
    }
}
?>
