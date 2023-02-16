<div class="contenedor0" id="contenedor0">
    <div id="contenedorRegistraCompra">
        <div class="col-12 divtitulosEmergente">
            <h2 class="col-5">Fecha de compra</h2>
            <h2 class="col-5">Proveedor</h2>
            <h2 class="col-2"></h2>
        </div>
        <form id="formFacturaCompraEmergente1" class="bloque1 col-12">
            <input type="date" name="textRegistrarCompra1" id="textRegistrarCompra1" class="campo1" required>
            <!-- <input type="text" name="textRegistrarCompra2" id="textRegistrarCompra2" required class="campo1"> -->
            <?php require_once('Controllers/ProveedoresSelect1Controller.php');?>

            <div >
                <!-- <a href="facturacompra.php">
                    <input type="button" name="botonRegistrarCompra1" id="botonRegistrarCompra1"  value="Aceptar" >
                </a> -->
            <input type="button" name="botonRegistrarCompra1" id="botonRegistrarCompra1"  value="Aceptar" >
            </div>
        </form>
    </div>
</div>