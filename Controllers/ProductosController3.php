<?php
    if(!isset($_POST['productoSelect']))
    {
        $id="1";
    }else{
        $id = $_POST['productoSelect'];
    }

    if(file_exists("../Db/Con1Db.php"))
    {
        // Llamada a la conexion
        require_once "../Db/Con1Db.php";
        // Llamada al modelo
        require_once "../Models/Datos1Model.php";
    }
    elseif(file_exists("Db/Con1Db.php"))
    {
        // Llamada a la conexion
        require_once "Db/Con1Db.php";
        // Llamada al modelo
        require_once "Models/Datos1Model.php";
    }

    // Instanciacion del objeto
    $oData = new Datos;
    // Llamada al metodo
    $sql = "SELECT * FROM productos where id_producto='$id'";

    $data = $oData->getData1($sql);
    
    if(empty($data))
    {
        echo"
            <div class='bloque1 negrita'>
                No hay datos.
                
            </div>
        ";
    }
    else
    {
        foreach ($data as $row)
        {

            echo"
            <form id='formRegistraVenta2' class='formFacturaCompra pt-2 pb-2'>
                <div class='col-12'>
                <h4>Referencia</h4>
                    <input type='text' name='id' id='id' readonly  value='$row->id_producto'>
                </div> 
                <div class='col-12 cajaFacturaCompra'>
                <div class='col-6'>
                    <div>
                        <h4>Modelo</h4>
                        <input type='text' name='modelo' id='modelo' readonly value='$row->modelo'>    
                    </div>
                <div>
                    <h4>Marca</h4>
                    <input type='text' name='marca' id='marca' readonly value='$row->marca'>    
                </div>
                <div>
                    <h4>Categoria</h4>
                    <input type='text' name='categoria' id='categoria' readonly value='$row->categoria'>    
                    <!-- en un futuro lista desplegable con las categorias disponibles -->
                </div>
                </div>
                <div class='col-6'>
                <div>
                    <h4>Cantidad</h4>
                    <input type='number' name='stock' id='stock'>    
                </div>
                </div>
                </div>
                <div class='cajaBotonProducto'>
                    <input type='submit' id='botonAñadirProducto' name='botonAñadirProducto' class='boton1' value='Añadir producto'>
                </div>
            </form>
        ";
        }
    }
?>