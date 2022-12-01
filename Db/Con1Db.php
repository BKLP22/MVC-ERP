<?php
class Connection
{
    public static function conn1()
    {
        $mysqli = new mysqli('localhost', 'root','', 'erp');
        if($mysqli->connect_errno)
        {
            printf("Error en la conexion: %s\n", $mysqli->coneect_errno);
        }
        else
        {
            $mysqli->set_charset('utf8');
            return $mysqli;
        }
    }
}
?>