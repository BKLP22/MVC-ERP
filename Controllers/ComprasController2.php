<?php

$textConsulta1 = empty($_POST['textConsultaCompras1']) ? '' : $_POST['textConsultaCompras1'];

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

$buscarcliente = "select * from compras where id_compra like '%$textConsulta1%'";
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
    <div class='bloque1'><h1 class='border'>ID Compra</h1></div>
    <div class='bloque1'><h1 class='border'>ID Proveedor</h1></div>
    <div class='bloque1'><h1 class='border'>Fecha compra Cliente</h1></div>
    <div class='bloque1'><h1 class='border'>Precio</h1></div>
    <div class='bloque1'><h1 class='border'>Coste logistico envio</h1></div>
    <div class='bloque1'><h1 class='border'>Detalles</h1></div>
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
            <div class='bloque1'><a href='detalles_compra.php?idCompra=$row->id_compra' class='enlaces2'>Detalles</a></div>
        </div>
        "; 
    }
}
?>
