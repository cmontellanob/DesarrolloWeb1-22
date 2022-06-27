function autenticar() {
    var correoelectronico = document.getElementById("correoelectronico").value;
    var password = document.getElementById("password").value;
    var parametros = "correoelectronico=" + correoelectronico + "&password=" + password + "&nocache=" + Math.random();
    var ajax = new XMLHttpRequest();

    ajax.open("POST", "autenticar.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            var respuesta = ajax.responseText;
            var obj = JSON.parse(respuesta);
            if (obj.exito == "1") {
                document.getElementById("mensaje").innerHTML = "Datos Correctos"
                ajax2 = new XMLHttpRequest();
                ajax2.open("GET", "menu.html", true);
                ajax2.onreadystatechange = function () {
                    if (ajax2.readyState == 4 && ajax2.status == 200) {
                        document.getElementById("cuerpo").innerHTML = ajax2.responseText;
                    }
                }
                ajax2.send();
            } else {
                document.getElementById("mensaje").innerHTML = obj.mensaje;

            }
        }

    }
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    ajax.send(parametros);
}
function cargar(url) {
    var ajax = new XMLHttpRequest();
    ajax.open("GET", url, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById("operacion").innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}
function ordenar(campo) {
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "listar.php?orden=" + campo, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById("operacion").innerHTML = ajax.responseText;
        }
    }
    ajax.send();

}
function buscar() {
    var buscar = document.getElementById("buscar").value;
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "listar.php?buscar=" + buscar, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById("operacion").innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}
function insertar() {
    var formulario = document.getElementById("form-persona");
    var parametros = new FormData(formulario);
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "insertar.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById("operacion").innerHTML = ajax.responseText;
        }

    }
    ajax.send(parametros);
}
function formeditar(id)
{
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "form_editar.php?id=" + id, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById("operacion").innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}
function editar()
{
    
    var formulario=document.getElementById("form-editar");
    var ajax = new XMLHttpRequest();
    var parametros = new FormData(formulario);
    ajax.open("POST", "editar.php", true);
    
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById("operacion").innerHTML = ajax.responseText;
        }
    }
    ajax.send(parametros);
}
function eliminar(id)
{
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "eliminar.php?id=" + id, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById("operacion").innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}

