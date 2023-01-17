<?php

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

$buscaproducto = "select * from compras";
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
    <div class='bloque1'><h1 class='border'>ID Compra</h1></div>
    <div class='bloque1'><h1 class='border'>ID Proveedor</h1></div>
    <div class='bloque1'><h1 class='border'>Fecha compra Cliente</h1></div>
    <div class='bloque1'><h1 class='border'>Precio</h1></div>
    <div class='bloque1'><h1 class='border'>Coste logistico envio</h1></div>
    </div>
    ";
    foreach($data as $row)
    {
        echo"
        <div class='bloque0'>
            <div class='bloque1'>$row->id_compra</div>
            <div class='bloque1'>$row->id_proveedor</div>
            <div class='bloque1'>$row->fecha_compra</div>
            <div class='bloque1'>$row->precio</div>
            <div class='bloque1'>$row->coste_logistico</div>
        "; 
    }
}
?>
