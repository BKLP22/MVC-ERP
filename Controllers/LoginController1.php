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
$nom_usu=$_POST['nom_usu'];
$con_usu=$_POST['con_usu'];

$oData = new Datos;
$sql = "select * from usuarios where nom_usu=? and con_usu=?";
$data = $oData->login($sql,$nom_usu,$con_usu);

echo $data;

?>