        <div class="pt-2">

            <form action="" id="formRegistraVenta1">
                <label for="">Producto: </label>
                <select name="productoSelect" id="productoSelect">
                    <?php require_once('Controllers/ProductosSelect1Controller.php');?>
                </select>
                <input type="submit"  id="botonProductoSelect" value="Aceptar">
            </form>

            <h3>Numero del pedido: <input type="number" value="" id="numeroPedido" name="numeroPedido"></h3>
        </div>
        <div class="contenedor2" id="contenedor2">

        <div>
            <h1>Fecha y cliente</h1>
        </div>
        <div>
            <form id="formRegistrarVenta0" class="bloque1 col-12">
                <input type="date" name="fechaVenta1" id="fechaVenta1" class="campo1" required>
                <?php require_once('Controllers/ClientesSelect1Controller.php');?>
                <input type="submit" class="boton1" name="botonRegistrarVenta1" id="botonRegistrarVenta1"  value="Aceptar" >
            </form>
        </div>
        </div>