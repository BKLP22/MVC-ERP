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

$buscaproducto = "select * from proveedores where borrado = 0";
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
    <div class='bloque1'><h1 class='border'>ID Proveedor</h1></div>
    <div class='bloque1'><h1 class='border'>Nombre</h1></div>
    <div class='bloque1'><h1 class='border'>CP Cliente</h1></div>
    <div class='bloque1'><h1 class='border'>Correo venta</h1></div>
    <div class='bloque1'><h1 class='border'>Tlf envio</h1></div>
    <div class='bloque1'><h1 class='border'>IBAN</h1></div>
    <div class='bloque1'></div>

    </div>
    ";
    foreach($data as $row)
    {
        echo"
        <div class='bloque0'>
            <div class='bloque1'>$row->id_proveedor</div>
            <div class='bloque1'>$row->nombre</div>
            <div class='bloque1'>$row->cp</div>
            <div class='bloque1'>$row->correo</div>
            <div class='bloque1'>$row->tlf</div>
            <div class='bloque1'>$row->iban</div>
            <div class='bloque1'><a class='editar' href='editarproveedores.php?idproveedor=$row->id_proveedor'>Editar</a></div>
        </div>
        "; 
    }
}
?>
