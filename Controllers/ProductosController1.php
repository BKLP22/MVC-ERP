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

$buscaproducto = "select * from productos";
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
    <div class='bloque1'><h1 class='border'>ID</h1></div>
    <div class='bloque1'><h1 class='border'>Precio unitario</h1></div>
    <div class='bloque1'><h1 class='border'>PVP</h1></div>
    <div class='bloque1'><h1 class='border'>Modelo</h1></div>
    <div class='bloque1'><h1 class='border'>Marca</h1></div>
    <div class='bloque1'><h1 class='border'>Categoria</h1></div>
    <div class='bloque1'><h1 class='border'>Stock</h1></div>
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
            <div class='bloque1'>$row->stock</div>
        </div>
        "; 
    }
}
?>
