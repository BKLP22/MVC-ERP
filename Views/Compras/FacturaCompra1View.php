<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>
</head>
<body>
    <section>
        <div>
            <h1>Fecha y proveedor</h1>
        </div>
        <div>
            <form id="formRegistrarCompra1" class="bloque1 col-12">
                <input type="date" name="textRegistrarCompra1" id="textRegistrarCompra1" class="campo1" required>
                <!-- <input type="text" name="textRegistrarCompra2" id="textRegistrarCompra2" required class="campo1"> -->
                <?php require_once('Controllers/ProveedoresSelect1Controller.php');?>
                <input type="submit" class="boton1" name="botonRegistrarCompra1" id="botonRegistrarCompra1"  value="Aceptar" >
            </form>
        </div>
        <div class="pt-2">
            <form id="formRegistraProducto1" class="formFacturaCompra pt-2 pb-2">
                    <div class="col-12">
                        <h4>Referencia</h4>
                        <input type="text" name="id" id="id">
                    </div> 
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
                    <input type="submit" id="botonRegistrarProducto" name="botonRegistrarProducto" class="boton1" value="Registrar producto">
            </div>
            </form>
            <h3>Numero del pedido: <input type="number" value="" id="numeroPedido" name="numeroPedido"></h3>

        </div>
        <div class="contenedor2" id="contenedor2">
        </div>
    </section>
</body>
</html>