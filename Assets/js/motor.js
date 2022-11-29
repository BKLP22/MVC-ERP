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

// INICIO AJAXPOST1, DEVUELVE EL RESULTADO A UN DIV
function ajax1Post1(form1, controlador1, div1)
{
    //1 Creacion del objeto
    let ajax1 = new XMLHttpRequest();
    //2 enlace del formulario a un objeto formdata
    const formdata1 = new FormData(form1);
    //5 Exito en el envio
    ajax1.addEventListener("load", function(event){
        //en vez de establecer el id a mano se pone que la variable saque el atributo
        document.getElementById(div1.id).innerHTML = this.responseText;
    });

    ajax1.addEventListener("error", function(event){

        alert("Error: No se ha enviado la información");

    });

    //3 configuracion del formulario a traves de un formdata
    ajax1.open("POST", controlador1 );
    ajax1.send(formdata1); //Se acaba cliente empieza servidor
}
//FIN AJAXPOST1

function seleccionarDatos1(form1, boton1, controlador1, div1)
{
    deshabilitarControl1(boton1);
    //Utilizaremos post porque el boton es submit
    ajax1Post1(form1, controlador1, div1);
    habilitarControl1(boton1);
    //reset limpia todos los campos de texto de un formulario
    form1.reset();
}

window.addEventListener("load", function(){

    /*----------- INICIO SUBMIT ----------*/ 
    const formconsulta1 = document.getElementById("formConsulta1");
    const botonconsulta1 = document.getElementById("botonConsulta1");
    const consulta1controller = "Controllers/lupaController.php";
    //para el resultado de la venta, creamos un div pequeño donde ira un a que enlace con la parte buscada
    //const contenedor2 = document.getElementById("contenedor2");
    let div = document.createElement("div");
    div.classList.add("divresultado");
    div.appendChild(formconsulta1);
    
    // Asociacion del evento y llamada a la funcion cuando el boton exista
    if(formconsulta1)
    {
        formconsulta1.addEventListener("submit", function(event){
            //Con esta linea evitamos que html haga el parpadeo por defecto al hacer la llamada sincronizada, nosotros la queremos asincrona
            event.preventDefault();
            seleccionarDatos1(formconsulta1, botonconsulta1, consulta1controller, div);
        });
    }
    /*----------- FIN SUBMIT ----------*/ 
});