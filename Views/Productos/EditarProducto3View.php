<div class="pt-2">
<?php require_once "Controllers/EditarProductoController1.php"; ?>
    <form id="formEditarProducto1" class="formFacturaCompra pt-2 pb-2">
        <div class="col-12">
            <h4>ID Producto</h4>
                <input type="text" name="id" id="id" value='<?php echo $id_producto ?>'>
        </div> 
                <div class="col-12 cajaFacturaCompra">

                    <div class="col-6">
                        <div>
                            <h4>Modelo</h4>
                            <input type="text" name="modelo" id="modelo" value='<?php echo $modelo ?>'>    
                        </div>
                        <div>
                            <h4>Marca</h4>
                            <input type="text" name="marca" id="marca" value='<?php echo $marca ?>'>    
                        </div>
                        <div>
                            <h4>Categoria</h4>
                            <input type="text" name="categoria" id="categoria" value='<?php echo $categoria ?>'>    
                            <!-- en un futuro lista desplegable con las categorias disponibles -->
                        </div>
                    </div>
                    <div class="col-6">
                    <div>
                            <h4>Stock</h4>
                            <input type="number" name="stock" id="stock" value='<?php echo $stock ?>'>    
                        </div>
                        <div>
                            <h4>Precio de compra/u</h4>
                            <input type="number" name="preciocompra" id="preciocompra" value='<?php echo $precio_unitario ?>'>    
                        </div>
                        <div>
                            <h4>Precio de venta/u</h4>
                            <input type="number" name="precioventa" id="precioventa" value='<?php echo $pvp ?>'>    
                            <!-- en un futuro lista desplegable con las categorias disponibles -->
                        </div>
                    </div>
                </div>
  
                <div >
                    <textarea  class="col-10" name="descripcion" id="descripcion"  rows="10" ><?php echo $descripcion ?></textarea>
                </div>
                <div class="cajaBotonProducto">
                    <input type="submit" id="botonEditarProducto" name="botonEditarProducto" class="boton1" value="Editar producto">
            </div>
            </form>
            <div id="contenedor2"></div>
        </div>