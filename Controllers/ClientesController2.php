<?php

$textConsulta1 = empty($_POST['textConsultaClientes1']) ? '' : $_POST['textConsultaClientes1'];

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

$buscarcliente = "select * from clientes where dni like '%$textConsulta1%'";
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
    <div class='bloque1'><h1 class='border'>DNI</h1></div>
    <div class='bloque1'><h1 class='border'>Nombre</h1></div>
    <div class='bloque1'><h1 class='border'>Apellido</h1></div>
    <div class='bloque1'><h1 class='border'>Correo</h1></div>
    <div class='bloque1'><h1 class='border'>CP</h1></div>
    <div class='bloque1'><h1 class='border'>Tlf</h1></div>
    <div class='bloque1'></div>
    </div>
    ";
    foreach($data as $row)
    {
        echo"
        <div class='bloque0'>
            <div class='bloque1'>$row->dni</div>
            <div class='bloque1'>$row->nombre</div>
            <div class='bloque1'>$row->apellido</div>
            <div class='bloque1'>$row->correo</div>
            <div class='bloque1'>$row->cp</div>
            <div class='bloque1'>$row->tlf
            <div class='bloque1'><a href='editarclientes.php?dni=$row->dni'>Editar</a></div>
            </div>
        "; 
    }
}
?>
