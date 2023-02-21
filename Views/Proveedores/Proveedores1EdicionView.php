
<div class="divEliminarproveedores">
   <div class="bloque1" id="">
        <form id="formEdicionProveedores1" class="bloque1 col-8">
        <?php require_once "Controllers/EditarProveedoresController1.php"; ?>
            
            <input type="hidden" name="textEdicionProveedores1" id="textEdicionProveedores1" required class="campo1" value='<?php echo $idProveedor;?>'>
            <input type="text" name="textEdicionProveedores2" id="textEdicionProveedores2" required class="campo1" value='<?php echo $nombre;?>'>
            <input type="text" name="textEdicionProveedores3" id="textEdicionProveedores3" required class="campo1" value='<?php echo $cp;?>'>
            <input type="text" name="textEdicionProveedores4" id="textEdicionProveedores4" required class="campo1" value='<?php echo $correo;?>'>
            <input type="text" name="textEdicionProveedores5" id="textEdicionProveedores5" required class="campo1" value='<?php echo $tlf;?>'>
            <input type="submit" name="botonEdicionProveedores1" id="botonEdicionProveedores1" class="boton1" value="Editar">
        </form>

    </div>
    <div class="col-12 eliminarproveedores">
        <div class="col-1 ">
            <input type="button" name="botonBorrarProveedores1" id="botonBorrarProveedores1" class="borrar" value="borrar">
        </div> 
    </div>

</div>    

    <div class="contenedor2" id="contenedor2">
</div>

