function autenticar(){
    var correoelectronico = document.getElementById("correoelectronico").value;
    var password = document.getElementById("password").value;
    var parametros="correoelectronico="+correoelectronico+"&password="+password+"&nocache=" + Math.random();
    var ajax = new XMLHttpRequest();
    
    ajax.open("POST", "autenticar.php", true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
            var respuesta = ajax.responseText;
            var obj = JSON.parse(respuesta);
            if(obj.exito == "1"){
                document.getElementById("mensaje").innerHTML="Datos Correctos"
                ajax2=new XMLHttpRequest();
                ajax2.open("GET", "menu.html", true);
                ajax2.onreadystatechange = function() {
                    if (ajax2.readyState == 4 && ajax2.status == 200) {
                        document.getElementById("cuerpo").innerHTML=ajax2.responseText;
                    }
                }
                ajax2.send();
            }else{
               document.getElementById("mensaje").innerHTML = obj.mensaje;
                
            }
        }
    
    }
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    ajax.send(parametros);
}
function listar()
{
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "listar.php", true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
            document.getElementById("operacion").innerHTML=ajax.responseText;
        }
    }
    ajax.send();
}