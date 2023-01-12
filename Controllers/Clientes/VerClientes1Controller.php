<?php

require_once "../DB/Con1DB.php";
require_once "../Models/Datos1Model.php";

$objData = new Datos;

$buscaproducto = "select * from cliente";
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
    <div class='bloque1'><h1 class='border'>DNI</h1></div>
    <div class='bloque1'><h1 class='border'>Nombre unitario</h1></div>
    <div class='bloque1'><h1 class='border'>Apellido</h1></div>
    <div class='bloque1'><h1 class='border'>Correo</h1></div>
    <div class='bloque1'><h1 class='border'>CP</h1></div>
    <div class='bloque1'><h1 class='border'>Tlf</h1></div>
    </div>
    ";
    foreach($data as $row)
    {
        echo"
        <div class='bloque0'>
            <div class='bloque1'>$row->id_producto</div>
            <div class='bloque1'>$row->precio_unitario</div>
            <div class='bloque1'>$row->pvp</div>
            <div class='bloque1'>$row->modelo</div>
            <div class='bloque1'>$row->marca</div>
            <div class='bloque1'>$row->categoria</div>
        </div>
        "; 
    }
}
?>
