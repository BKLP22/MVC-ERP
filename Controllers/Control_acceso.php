
<?php

//Iniciar una nueva sesion o reanudar la existente
session_start();

//Comprobar que el usuario está autenticado
if($_SESSION['autenticado']!='true')
{
    //Si el usuario no esta autenticado lo redirigimos a index.php
    header('Location: index.php');
    //Y salir del script
    exit;
}


?>