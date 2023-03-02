<div class="contenedor0" id="contenedor0">
    <div class="bloque1" id="">
        <form id="formEdicionClientes1" class="bloque1 col-8">
        <?php require_once "Controllers/EditarClientesController1.php"; ?>
            <input type="hidden" name="textEdicionClientes1" id="textEdicionClientes1" required class="campo1" value='<?php echo $dni;?>'>
            <input type="text" name="textEdicionClientes2" id="textEdicionClientes2" required class="campo1" value='<?php echo $nombre;?>'>
            <input type="text" name="textEdicionClientes3" id="textEdicionClientes3" required class="campo1" value='<?php echo $apellido;?>'>
            <input type="text" name="textEdicionClientes4" id="textEdicionClientes4" required class="campo1" value='<?php echo $cp;?>'>
            <input type="text" name="textEdicionClientes5" id="textEdicionClientes5" required class="campo1" value='<?php echo $correo;?>'>
            <input type="text" name="textEdicionClientes6" id="textEdicionClientes6" required class="campo1" value='<?php echo $tlf;?>'>
            <input type="submit" name="botonEdicionClientes1" id="botonEdicionClientes1" class="boton1" value="Editar">
        </form>
    </div>
    <div class="col-12 eliminarproveedores">
        <div class="col-1 ">
            <input type="button" name="botonBorrarClientes1" id="botonBorrarClientes1" class="borrar" value="borrar" onclick="return confirm('Estas seguro de que quieres borrar');">
        </div> 
    </div>

</div>    

    <div class="contenedor2" id="contenedor2">
</div>

</div
