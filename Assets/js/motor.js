function habilitarControl1(control1, claseaquitar, claseaponer)
{
    //cambiar estetica
    control1.classList.remove(claseaquitar);
    control1.classList.add(claseaponer);
    //habilitar funcionalidad
    control1.disabled = false;
}

function deshabilitarControl1(control1, claseaquitar,claseaponer)
{
    //cambiar estetica
    control1.classList.remove(claseaquitar);
    control1.classList.add(claseaponer);
    //desabilitar funcionalidad
    control1.disabled = true;
}

/*INICIO - ajaxPost1 - Devuelve el resultadao a un div (POST) */
function ajaxPost1(form1,controlador1,div1)
{
    // 1.- Creación del objeto XMLHttpRquest
    const Ajax1 = new XMLHttpRequest();
    // 2.- Enlace del formulario a un objeto FormData
    const FormData1 = new FormData(form1);
    // 5.- Éxito en el envío
    Ajax1.addEventListener("load",function(event)
    {
        document.getElementById(div1.id).innerHTML = this.responseText;
        
    });
    //5.- Error en el envio 
    Ajax1.addEventListener("error",function(event)
    {
        alert("Error, no se ha enviado la información");
    });
    //3.- Configuración del envío del formulario atraves de un FromData
    Ajax1.open("POST",controlador1);
    //4.- Envio del formulario a tráves del FormData
    Ajax1.send(FormData1);
}
/*FIN - ajaxPost1 - Devuelve el resultadao a un div (POST) */

/*INICIO - ajaxPost2 - Devuelve el resultadao a un div (POST) */
function ajaxPost2(form1,controlador1,div1,idDetalles)
{
    // 1.- Creación del objeto XMLHttpRquest
    const Ajax1 = new XMLHttpRequest();
    // 2.- Enlace del formulario a un objeto FormData
    const FormData1 = new FormData(form1);
    //Le damos el name e inidicamos que input añadimos
    console.log(idDetalles);
    FormData1.append('idDetalles',idDetalles);

    // 5.- Éxito en el envío
    Ajax1.addEventListener("load",function(event)
    {
        document.getElementById(div1.id).innerHTML = this.responseText;
    });
    //5.- Error en el envio 
    Ajax1.addEventListener("error",function(event)
    {
        alert("Error, no se ha enviado la información");
    });
    //3.- Configuración del envío del formulario atraves de un FromData
    Ajax1.open("POST",controlador1);
    //4.- Envio del formulario a tráves del FormData
    Ajax1.send(FormData1);
}
/*FIN - ajaxPost2 - Devuelve el resultadao a un div (POST) */

/*INICIO - ajaxPost3 - Devuelve el resultadao al value de un input (POST) */
function ajaxPost3(form1,controlador1,input1)
{
    // 1.- Creación del objeto XMLHttpRquest
    const Ajax1 = new XMLHttpRequest();
    // 2.- Enlace del formulario a un objeto FormData
    const FormData1 = new FormData(form1);
    // 5.- Éxito en el envío
    Ajax1.addEventListener("load",function(event)
    {
        document.getElementById(input1.id).value = this.responseText;
        
    });
    //5.- Error en el envio 
    Ajax1.addEventListener("error",function(event)
    {
        alert("Error, no se ha enviado la información");
    });
    //3.- Configuración del envío del formulario atraves de un FromData
    Ajax1.open("POST",controlador1);
    //4.- Envio del formulario a tráves del FormData
    Ajax1.send(FormData1);
}
/*FIN - ajaxPost3 - Devuelve el resultadao al value de un input (POST) */

/*INICIO - ajaxGet1 - Devuelve el resultadao a un div (GET) */
function ajaxGet1(controlador1,div1)
{
    const Ajax1 = new XMLHttpRequest();
    Ajax1.onreadystatechange = function()
    {
        if(Ajax1.readyState==4&&Ajax1.status==200)
        {
            document.getElementById(div1.id).innerHTML=this.responseText;
        }
    };

    Ajax1.open("GET",controlador1);
    Ajax1.send();
}

function  ajaxPostLogin1(form1,r1,control1)
{
     //1- Creacion del objeto del XMLHTprequest
     const Ajax1 = new XMLHttpRequest();
     //2- Enlace Formulario  del formulario a un objeto (FormDAta1)
     const FormDAta1 = new FormData(form1);
     //5.- Exito en el envio 
     Ajax1.addEventListener("load", function(event)
     {
         //recivir respuestas del servidor
         //target es para pillar la respuesta en el Controlador 
         
         let respuesta1 = event.target.responseText;
         console.log(respuesta1);
         if(respuesta1==1 )
         {
             window.location.assign("erp.php");
         }  else if(respuesta1==0 )
         {
             r1.innerHTML="Usuario o clave incorrecta"
         }else{
             r1.innerHTML="No se ha podido realizar la autenticacion";
         }
         
     });
         //5.- Error en el envio 
         window.addEventListener("error", function(event)
         {
 
             div1.innerHTML="Error no se ha enviado la informacion";
         });
 
         //3.- Configuracion del envio del formulario a traves del FormData
         Ajax1.open("POST",control1);
         Ajax1.send(FormDAta1);
};
/*FIN - ajaxGet1 - Devuelve el resultadao a un div (POST) */

function seleccionarDatos1(form1,boton1,controlador1,div1)
{
    deshabilitarControl1(boton1,"boton1", "boton1Inhabilitado");
    ajaxPost1(form1,controlador1,div1);
    habilitarControl1(boton1, "boton1Inhabilitado", "boton1");
    form1.reset();
}

function seleccionarDatos2(form1, boton1, controlador1, div1)
{
  deshabilitarControl1(boton1, "boton1", "boton1Inhabilitado");
  ajaxGet1(controlador1, div1);
  habilitarControl1(boton1, "boton1Inhabilitado", "boton1");
  form1.reset();
}

function subconsultaDetalles(form1, boton1, controlador1, div1, idDetalles)
{
  deshabilitarControl1(boton1, "boton1", "boton1Inhabilitado");
  ajaxPost2(form1,controlador1,div1,idDetalles);
  habilitarControl1(boton1, "boton1Inhabilitado", "boton1");
  form1.reset();
}

function insertarDatos1(form1, boton1, controlador1, div1)
{      
  deshabilitarControl1(boton1, "boton1", "boton1Inhabilitado");
  // Opcion 1: El mensaje se muestra en un div (ajaxPost1)
  ajaxPost1(form1,controlador1,div1);
  // Opcion 2: El mensaje se muestra en una alert (ajaxPost2)
  // ajaxPost2(form1,controlador1,div1);
  habilitarControl1(boton1, "boton1Inhabilitado", "boton1");
  form1.reset();
}

function insertarDatosSinReset(form1, boton1, controlador1, div1)
{      
  deshabilitarControl1(boton1, "boton1", "boton1Inhabilitado");
  // Opcion 1: El mensaje se muestra en un div (ajaxPost1)
  ajaxPost3(form1,controlador1,div1);
  // Opcion 2: El mensaje se muestra en una alert (ajaxPost2)
  // ajaxPost2(form1,controlador1,div1);
  habilitarControl1(boton1, "boton1Inhabilitado", "boton1");
}

function  insertarRegistro(formRegistro1,btnRegistro,r1,controlador1){
    deshabilitarControl1(btnRegistro, "boton1", "boton1Inhabilitado");
  // Opcion 1: El mensaje se muestra en un div (ajaxPost1)
  ajaxPost1(formRegistro1,controlador1,r1);
  // Opcion 2: El mensaje se muestra en una alert (ajaxPost2)
  // ajaxPost2(form1,controlador1,div1);
  habilitarControl1(btnRegistro, "boton1Inhabilitado", "boton1");
  formRegistro1.reset();

}

function modificarDatos1(form1, boton1, controlador1, div1)
{      
  deshabilitarControl1(boton1, "boton1", "boton1Inhabilitado");
  // Opcion 1: El mensaje se muestra en un div (ajaxPost1)
  ajaxPost1(form1,controlador1,div1);
  // Opcion 2: El mensaje se muestra en una alert (ajaxPost2)
  // ajaxPost2(form1,controlador1,div1);
  habilitarControl1(boton1, "boton1Inhabilitado", "boton1");
}

function eliminarDatos1(boton1, controlador1, div1){
    deshabilitarControl1(boton1, "boton1", "boton1Inhabilitado");
    // Opcion 1: El mensaje se muestra en un div (ajaxPost1)
    ajaxGet1(controlador1,div1);
    // Opcion 2: El mensaje se muestra en una alert (ajaxPost2)
    // ajaxPost2(form1,controlador1,div1);
    habilitarControl1(boton1, "boton1Inhabilitado", "boton1");
}

function autent1(form1,boton1,r1,control1){
    deshabilitarControl1(boton1);
    ajaxPostLogin1(form1,r1,control1);
    habilitarControl1(boton1);
    form1.reset();

};

window.addEventListener("load", function()
{
    let boton1;
    let boton2;
    let controlador1;
    let controlador2;
    let idDetalles;
    let div1;
    let div2;


    /*--------------INICIO-(submit) Seleccionar 1 ----------------------*/
    //Paso 1:Obtener referencias
    const formConsulta1 = this.document.getElementById("formConsulta1");
    const contenedor2 = this.document.getElementById("contenedor2");
    //Paso 2: Asociación del elemento al evento (submit) y llamada a la función
    if(formConsulta1)
    {
        boton1=this.document.getElementById("botonConsulta1");
        controlador1="Controllers/ProductosController2.php";
        formConsulta1.addEventListener("submit",function(event)
        {
            event.preventDefault();
            seleccionarDatos1(formConsulta1,boton1,controlador1,contenedor2);
        });
    }
    const botonConsulta2 = document.getElementById("botonConsulta2");
    if(botonConsulta2)
    {
        controlador2="Controllers/ProductosController1.php";
        botonConsulta2.addEventListener("click", function(event)
        {
            event.preventDefault();
            seleccionarDatos2(formConsulta1,botonConsulta2,controlador2,contenedor2);
        });
    }

    //Eventos de busqueda y ver todos de clientes
    const formConsulta01 = this.document.getElementById("formConsultaClientes1");
    if(formConsulta01)
    {
        boton1=this.document.getElementById("botonConsultaClientes1");
        controlador1="Controllers/ClientesController2.php";
        formConsulta01.addEventListener("submit",function(event)
        {
            event.preventDefault();
            seleccionarDatos1(formConsulta01,boton1,controlador1,contenedor2);
        });
    }

    const botonConsulta02 = document.getElementById("botonConsultaClientes2");
    if(botonConsulta02)
    {
        controlador2="Controllers/ClientesController1.php";
        botonConsulta02.addEventListener("click", function(event)
        {
            event.preventDefault();
            seleccionarDatos2(formConsulta01,botonConsulta02,controlador2,contenedor2);
        });
    }
    const formEdicionClientes1 = document.getElementById("formEdicionClientes1");
    // Paso 2 - Asociación del elemento al evento (submit) y llamada a la función
    if(formEdicionClientes1)
    {
      // Referencia de los elementos
      boton1 = document.getElementById("botonEdicionClientes1");
      controlador1 = "Controllers/EditarClientesController2.php";
      // Evento y llamada a la función
      formEdicionClientes1.addEventListener("submit", function(event){
        event.preventDefault();
        modificarDatos1(formEdicionClientes1,boton1,controlador1,contenedor2);
      });
    }
    //Eventos de busqueda y ver todos de Ventas

    const formConsulta001 = this.document.getElementById("formConsultaVentas1");
    if(formConsulta001)
    {
        boton1=this.document.getElementById("botonConsultaVentas1");
        controlador1="Controllers/VentasController2.php";
        formConsulta001.addEventListener("submit",function(event)
        {
            event.preventDefault();
            seleccionarDatos1(formConsulta001,boton1,controlador1,contenedor2);
        });
    }
    const botonConsulta002 = document.getElementById("botonConsultaVentas2");
    if(botonConsulta002)
    {
        controlador2="Controllers/VentasController1.php";
        botonConsulta002.addEventListener("click", function(event)
        {
            event.preventDefault();
            seleccionarDatos2(formConsulta001,botonConsulta002,controlador2,contenedor2);
        });
    }

    //Eventos de bsuqueda y ver todos de Factura ventas(Detalles del pedido)

    const formConsulta000001 = this.document.getElementById("formFacturaVenta1");
    if(formConsulta000001)
    {
        idDetalles=this.document.getElementById("idPedidoFacturaVenta");
        console.log(idDetalles.value);
        boton1=this.document.getElementById("botonFacturaVenta1");
        controlador1="Controllers/FacturaVentaController2.php";
        formConsulta000001.addEventListener("submit",function(event)
        {
            event.preventDefault();
            subconsultaDetalles(formConsulta000001,boton1,controlador1,contenedor2,idDetalles.value);
        });
    }
    const botonConsulta000002 = document.getElementById("botonFacturaVenta2");
    if(botonConsulta000002)
    {
        controlador2="Controllers/FacturaVentaController3.php";
        botonConsulta000002.addEventListener("click", function(event)
        {
            event.preventDefault();
            subconsultaDetalles(formConsulta000001,boton1,controlador2,contenedor2,idDetalles.value);
        });
    }

    //Eventos de busqueda y ver todos de Compras
    
    const formConsulta0001 = this.document.getElementById("formConsultaCompras1");
    if(formConsulta0001)
    {
        boton1=this.document.getElementById("botonConsultaCompras1");
        controlador1="Controllers/ComprasController2.php";
        formConsulta0001.addEventListener("submit",function(event)
        {
            event.preventDefault();
            seleccionarDatos1(formConsulta0001,boton1,controlador1,contenedor2);
        });
    }


    const botonConsulta0002 = document.getElementById("botonConsultaCompras2");
    if(botonConsulta0002)
    {
        controlador2="Controllers/ComprasController1.php";
        botonConsulta0002.addEventListener("click", function(event)
        {
            event.preventDefault();
            seleccionarDatos2(formConsulta001,botonConsulta0002,controlador2,contenedor2);
        });
    }

    //formRegistrarCompra1
    const formRegistrarCompra1 = this.document.getElementById("formRegistrarCompra1");
    if(formRegistrarCompra1)
    {
        boton1= this.document.getElementById('botonRegistrarCompra1');
        controlador1="Controllers/RegistraCompraInicioController1.php";
        const spanPedido = this.document.getElementById('numeroPedido');
        formRegistrarCompra1.addEventListener('submit',function(event)
        {
            event.preventDefault();
            insertarDatosSinReset(formRegistrarCompra1,boton1,controlador1,spanPedido);
        });
    }

    //formRegistraProducto1

    const formRegistraProducto1 = this.document.getElementById("formRegistraProducto1");
    if(formRegistraProducto1)
    {
        boton2= this.document.getElementById('botonRegistrarProducto');
        controlador2="Controllers/RegistraCompraProductoController1.php";
        const inputId = this.document.getElementById("numeroPedido");
        formRegistraProducto1.addEventListener('submit',function(event)
        {
            event.preventDefault();
            subconsultaDetalles(formRegistraProducto1,boton2,controlador2,contenedor2,inputId.value);
        });
    }

    //Eventos de busqueda y ver todo de Factura Compra
    const formConsulta000000001 = this.document.getElementById("formFacturaCompra1");
    if(formConsulta000000001)
    {
        idDetalles=this.document.getElementById("idPedidoFacturaCompra");
        console.log(idDetalles.value);
        boton1=this.document.getElementById("botonFacturaCompra1");
        controlador1="Controllers/FacturaCompraController2.php";
        formConsulta000000001.addEventListener("submit",function(event)
        {
            event.preventDefault();
            console.log
            subconsultaDetalles(formConsulta000000001,boton1,controlador1,contenedor2,idDetalles.value);
        });
    }
    const botonConsulta000000002 = document.getElementById("botonFacturaCompra2");
    if(botonConsulta000000002)
    {
        controlador2="Controllers/FacturaCompraController3.php";
        botonConsulta000000002.addEventListener("click", function(event)
        {
            event.preventDefault();
            subconsultaDetalles(formConsulta000000001,boton1,controlador2,contenedor2,idDetalles.value);
        });
    }
    //Eventos de busqueda y ver todos de Proveedores

    const formConsulta00001 = this.document.getElementById("formConsultaProveedores1");
    if(formConsulta00001)
    {
        boton1=this.document.getElementById("botonConsultaProveedores1");
        controlador1="Controllers/ProveedoresController2.php";
        formConsulta00001.addEventListener("submit",function(event)
        {
            event.preventDefault();
            seleccionarDatos1(formConsulta00001,boton1,controlador1,contenedor2);
        });
    }
    const botonConsulta00002 = document.getElementById("botonConsultaProveedores2");
    if(botonConsulta00002)
    {
        controlador2="Controllers/ProveedoresController1.php";
        botonConsulta00002.addEventListener("click", function(event)
        {
            event.preventDefault();
            seleccionarDatos2(formConsulta0001,botonConsulta00002,controlador2,contenedor2);
        });
    }
    const formEdicionProveedor1 = document.getElementById("formEdicionProveedores1");
    // Paso 2 - Asociación del elemento al evento (submit) y llamada a la función
    if(formEdicionProveedor1)
    {
      // Referencia de los elementos
      boton1 = document.getElementById("botonEdicionProveedores1");
      controlador1 = "Controllers/EditarProveedoresController2.php";
      // Evento y llamada a la función
      formEdicionProveedor1.addEventListener("submit", function(event){
        event.preventDefault();
        modificarDatos1(formEdicionProveedor1,boton1,controlador1,contenedor2);
      });
    };

    const botonEliminarProveedor = document.getElementById("botonBorrarProveedores1");
    if(botonEliminarProveedor)
    {
        controlador1 = "Controllers/BorrarProveedores1Controller.php";
        botonEliminarProveedor.addEventListener("click", function(event){
            event.preventDefault();
            eliminarDatos1(botonEliminarProveedor,controlador1,contenedor2);
          });
        
    }
    //----------------------Login--------------------

    const formLogin1 = document.getElementById("formLogin1");
    if (formLogin1)
    {
        const btnLogin1 = document.getElementById("login");
        const r1 = document.createElement("r1");
        const controlador1 = "Controllers/LoginController1.php"
        formLogin1.addEventListener("submit", function(event){
            event.preventDefault();
            autent1(formLogin1,btnLogin1,r1,controlador1)
        })
    }

    //-----------------------Registro---------------------
    const formRegistro1 = document.getElementById("formRe");
    if(formRegistro1){
        console.log(formRegistro1)
        const btnRegistro = document.getElementById("registrar");
        const r1 = document.getElementById("r1");
        const controlador1 = "Controllers/RegistroController1.php";
        formRegistro1.addEventListener("submit", function(event){
            event.preventDefault();
            insertarDatos1(formRegistro1,btnRegistro,controlador1,r1)
        })

    }

    

});