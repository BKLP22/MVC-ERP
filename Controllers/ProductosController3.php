<?php

    /* INICIO - Tratamiento de los input type='text' */
    $textoInsercion0 = empty($_POST['textoInserncionProducto0']) ? '' : $_POST['textoInserncionProducto0'];
    $textoInsercion1 = empty($_POST['textoInserncionProducto1']) ? '' : $_POST['textoInserncionProducto1'];
    $textoInsercion2 = empty($_POST['textoInserncionProducto2']) ? '' : $_POST['textoInserncionProducto2'];
    $textoInsercion3 = empty($_POST['textoInserncionProducto3']) ? '' : $_POST['textoInserncionProducto3'];
    $textoInsercion4 = empty($_POST['textoInserncionProducto4']) ? '' : $_POST['textoInserncionProducto4'];
    $textoInsercion5 = empty($_POST['textoInserncionProducto5']) ? '' : $_POST['textoInserncionProducto5'];
    $textoInsercion6 = empty($_POST['textoInserncionProducto6']) ? '' : $_POST['textoInserncionProducto6'];
    $textoInsercion7 = empty($_POST['textoInserncionProducto7']) ? '' : $_POST['textoInserncionProducto7'];
    /* FIN - Tratamiento de los input type='text' */

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

    // Instanciacion del objeto
    $oData = new Datos;

    // Llamada al metodo
    $sql = "insert into productos (id_producto, precio_unitario, pvp, modelo, marca, categoria, descripcion, stock) values ('$textoInsercion0', '$textoInsercion1', '$textoInsercion2', '$textoInsercion3', '$textoInsercion4', '$textoInsercion5', '$textoInsercion6', '$textoInsercion7')";
    $data = $oData->setData1($sql);
    
    echo $data;

?>