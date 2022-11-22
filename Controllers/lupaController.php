<?php
$textConsulta1 = empty($_POST['textConsulta1']) ? '' : $_POST['textConsulta1'];

require_once "../DB/Con1DB.php";
require_once "../Models/Datos1Model.php";

$objData = new Datos;

$buscaproducto = "select * from productos where id_producto like '%$textConsulta1%' or precio_unitario='%$textConsulta1%' or pvp='$textConsulta1'  or modelo like'%$textConsulta1%' or marca like'%$textConsulta1%' or categoria like'%$textConsulta1%' or stock ='%$textConsulta1%' ";
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
        <div class='bloque1'>Marca: </div>
        <div class='bloque1'>Modelo: </div>
        <div class='bloque1'>Autonomia en km: </div>
    </div>
    ";
    foreach($data as $row)
    {
        echo"
        <div class='bloque0'>
            <div class='bloque1'>$row->mar_coc</div>
            <div class='bloque1'>$row->mod_coc</div>
            <div class='bloque1'>$row->aut_coc</div>
        </div>
        "; 
    }
}
?>
