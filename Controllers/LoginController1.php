<?php

if(file_exists("../Db/Con1Db.php"))
    {
        // Llamada a la conexion
        require_once "../Db/Con1Db.php";
        // Llamada al modelo
        require_once "../Models\Datos1Model.php";
    }
    elseif(file_exists("Db/Con1Db.php"))
    {
        // Llamada a la conexion
        require_once "Db/Con1Db.php";
        // Llamada al modelo
        require_once "Models/Datos1Model.php";
    }


// Declarar e inicializar la vriable respuesta a devolver a motor.js
$respuesta=0;
//Obtener el usuario y la clave
$cor_usu=$_POST['cor_usu'];
$con_usu=$_POST['con_usu'];

$oData = new Datos;
$sql = "select * from usuarios where cor_usu=?";
$data = $oData->login($sql,$cor_usu,$con_usu);

echo $data;

?>