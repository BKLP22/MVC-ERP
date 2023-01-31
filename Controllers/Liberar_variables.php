<?php 
//Iniciar una sesion o reaundar la existencia 
session_start();
//Liberar las variables de sesion 
session_unset();
//Destruir la informacion registrada en una session (pero no la variables de sesion)
session_destroy();




?>