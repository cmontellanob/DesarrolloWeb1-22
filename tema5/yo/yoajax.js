function cargar(direccion)
{
    var ajax = new XMLHttpRequest();
    ajax.open("GET", direccion, false);
    ajax.onreadystatechange = function()
    {
        if(ajax.readyState == 4 && ajax.status == 200)
        {
            document.getElementById("contenido").innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}
function contacto()
{
    var ajax = new XMLHttpRequest();
    var formulario=document.getElementById("formulario");
    var datos=new FormData(formulario);
    ajax.open("POST", "contacto.php", false);
    ajax.onreadystatechange = function()
    {
        if(ajax.readyState == 4 && ajax.status == 200)
        {
            console.log( ajax.responseText);
            document.getElementById("contenido").innerHTML = ajax.responseText;
        }
    }
    ajax.send(datos);
}