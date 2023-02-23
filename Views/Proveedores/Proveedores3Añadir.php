<div class="pt-2">
            <form id="formRegistraProveedor" class="formFacturaCompra pt-2 pb-2">

                <div class="col-12 cajaFacturaCompra">

                    <div class="col-6">
                        <div>
                            <h4>DNI</h4>
                            <input type="text" name="dni" id="dni">
                        </div> 
                        <div>
                            <h4>Nombre</h4>
                            <input type="text" name="nombre" id="nombre">    
                        </div>
                        <div>
                            <h4>Correo</h4>
                            <input type="text" name="correo" id="correo">    
                            <!-- en un futuro lista desplegable con las categorias disponibles -->
                        </div>
                    </div>
                    <div class="col-6">
                    <div>
                            <h4>Codigo Postal</h4>
                            <select name="cp" id="cp">
                                <?php require_once "Controllers/CodigopostalController1.php"; ?>
                            </select>
                        </div>
                        <div>
                            <h4>IBAN</h4>
                            <input type="text" name="iban" id="iba">    
                        </div>
                        <div>
                            <h4>Teléfono</h4>
                            <input type="number" name="telefono" id="telefono">    
                        </div>
                    </div>
                </div>

                <div class="cajaBotonProducto">
                    <input type="submit" id="botonRegistraProveedor" name="botonRegistraProveedor" class="boton1 col-12" value="Añadir">
            </div>
            </form>
            <div id="contenedor2"></div>
        </div>