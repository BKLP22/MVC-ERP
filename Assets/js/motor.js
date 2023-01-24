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

window.addEventListener("load", function()
{
    let boton1;
    let controlador1;
    let controlador2;
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
    const formInsercionProducto1 = document.getElementById("formInsercionProducto1");
    // Paso 2 - Asociación del elemento al evento (submit) y llamada a la función
    if(formInsercionProducto1)
    {
      // Referencia de los elementos
      boton1 = document.getElementById("botonInsercionProducto1");
      controlador1 = "Controllers/ProductosController3.php";
      // Evento y llamada a la función
      formInsercionProducto1.addEventListener("submit", function(event){
        event.preventDefault();
        insertarDatos1(formInsercionProducto1,boton1,controlador1,contenedor2);
      });
    }
});