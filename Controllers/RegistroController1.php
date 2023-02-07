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
    $nom_usu = empty($_POST['nom_usu']) ? '' : $_POST['nom_usu'];
    $cor_usu = empty($_POST['cor_usu']) ? '' : $_POST['cor_usu'];
    $con_usu = empty($_POST['con_usu']) ? '' : $_POST['con_usu'];
    $passw_encriptada = password_hash( $con_usu,PASSWORD_DEFAULT);
//Obtener el usuario y la clave


$oData = new Datos;
$sql = "insert into usuarios (nom_usu, cor_usu, con_usu) values (?, ?, ?)";
$data = $oData->RegistroUsuarios($sql,$nom_usu,$cor_usu, $passw_encriptada);

echo $data;

?>