<div class="contenedor0" id="contenedor0">
    <div class="" id="contenedor1">
        <form id="formConsultaCompras1" class="bloque1">
            <input type="text" name="textConsultaCompras1" id="textConsultaCompras1" required class="campo1">
            <input type="submit" name="botonConsultaCompras1" id="botonConsultaCompras1" class="boton1" value="Buscar">
            <input type="button" name="botonConsultaCompras2" id="botonConsultaCompras2" class="boton1" value="Ver todo">
            <a href="facturacompra.php" class="boton1">Registrar compra</a>
        </form>
    </div>
    <div class="contenedor2" id="contenedor2">
        <?php require_once "Controllers/ComprasController1.php"; ?>
    </div>
</div>