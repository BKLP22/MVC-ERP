<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <div>
            <div>
                <h3>Pedido</h3>
                <h3><?php echo $id_pedido?></h3> <!--sacarlo de compras -->
            </div>
            <div>
                <h3>Fecha</h3>
                <h3><?php echo $fecha_pedido?></h3> <!--sacarlo de compras -->
            </div>
            <div>
                <h3><?php echo $nombre?></h3> <!--sacarlo de proveedores -->
            </div>
        </div>

        <div class="pt-2">
            <form id="formRegistraCompra1" class="formFacturaCompra pt-2 pb-2">
                <div class="col-12 cajaFacturaCompra">
                    <div class="col-6">
                        <div>
                            <h4>Modelo</h4>
                            <input type="text" name="modelo" id="modelo">    
                        </div>
                        <div>
                            <h4>Marca</h4>
                            <input type="text" name="marca" id="marca">    
                        </div>
                        <div>
                            <h4>Categoria</h4>
                            <input type="text" name="categoria" id="categoria">    
                            <!-- en un futuro lista desplegable con las categorias disponibles -->
                        </div>
                    </div>
                    <div class="col-6">
                    <div>
                            <h4>Stock</h4>
                            <input type="number" name="stock" id="stock">    
                        </div>
                        <div>
                            <h4>Precio de compra/u</h4>
                            <input type="number" name="preciocompra" id="preciocompra">    
                        </div>
                        <div>
                            <h4>Precio de venta/u</h4>
                            <input type="number" name="precioventa" id="precioventa">    
                            <!-- en un futuro lista desplegable con las categorias disponibles -->
                        </div>
                    </div>
                </div>
  
                <div >
                    <textarea  class="col-10" name="descripcion" id="descripcion"  rows="10"></textarea>
                </div>
                <div class="cajaBotonProducto">
                    <input type="submit" class="boton1" value="Registrar producto">
                </div>
            </form>
            
        </div>
    </section>
</body>
</html>