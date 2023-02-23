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

$buscaproducto = "select cp from poblaciones";
$data = $objData->getData1($buscaproducto);

if(empty($data))
{
    echo"
    <div class='bloque1'>
    No hay datos
    </div>
    ";
}else{

    foreach($data as $row)
    {
        echo"
            <option value='$row->cp'>$row->cp</option>
        "; 
    }
}
?>