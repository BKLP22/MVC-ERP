function habilitarControl1(control1)
{
    //cambiar estetica
    control1.classList.remove("boton1Inhabilitado");
    control1.classList.add("boton1");
    //habilitar funcionalidad
    control1.disabled = false;
}

function deshabilitarControl1(control1)
{
    //cambiar estetica
    control1.classList.remove("boton1");
    control1.classList.add("boton1Inhabilitado");
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
    deshabilitarControl1(boton1);
    ajaxPost1(form1,controlador1,div1);
    habilitarControl1(boton1);
    form1.reset();
}

function seleccionarDatos2(controlador1,div1)
{

    ajaxGet1(controlador1,div1);
}

window.addEventListener("load", function(){

    /*--------------INICIO-(submit) Seleccionar 1 ----------------------*/
    //Paso 1:Obtener referencias
    const formConsulta1 = this.document.getElementById("formConsulta1");
    const botonConsulta1 = this.document.getElementById("botonConsulta1");
    const Consulta1Controller = "Controllers/lupaController.php";
    const contenedor2 = this.document.getElementById("contenedor2");
    //Paso 2: Asociación del elemento al evento (submit) y llamada a la función
    if(formConsulta1)
    {
        formConsulta1.addEventListener("submit",function(event)
        {
            event.preventDefault();
            seleccionarDatos1(formConsulta1,botonConsulta1,Consulta1Controller,contenedor2);
        });
    }
    const Consulta2Controller = "Controllers/todosProductos.php";
    const contenedor02 = this.document.getElementById("contenedor2");
    seleccionarDatos2(Consulta2Controller,contenedor02);

});