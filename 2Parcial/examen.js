document.onload = pregunta1();
function pregunta1(){
    var titulo = document.getElementById('titulo');
	fetch("pregunta1.html")
		.then(response => response.text())
		.then(data => titulo.innerHTML=data)
        .catch(error => console.log(error));
}
function pregunta2()
{
    document.getElementById('titulo').innerHTML = "Pregunta 2 DOM en Javascrip";
    html="";
    html+=`<label for="numero">numero</label>
          <input type="number" id="numero" onclick="repetir()">
          <div id="resultado"></resultado>`;
    document.getElementById('contenido').innerHTML = html;      
}
function repetir()
{   
    var mostrar=document.getElementById('titulo').innerHTML;
    var numero=document.getElementById('numero').value;
    html="<ul>";
    for(var i=0;i<numero;i++)
    {
        html+=`<li>${mostrar}</li>`;
    }
    html+="</ul>";
    document.getElementById('resultado').innerHTML = html;
}
function pregunta3()
{
    document.getElementById('titulo').innerHTML = "Pregunta 3 Insertar en Ajax";
    html="";
    var contenedor;
	contenedor = document.getElementById('contenido');
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", "formulario.php", true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();      
}

 function previsualizar() {
    var imagen=document.getElementById('vistaprevia');
    var archivo=document.getElementById('imagen');
    const [file] = archivo.files
    if (file) {
        imagen.src = URL.createObjectURL(file)
    }
    console.log(file);
}
function insertar()
{
   var ajax = new XMLHttpRequest() //crea el objetov ajax
    ajax.open("POST", "insertar.php", true)
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            document.getElementById('mensaje').innerHTML = ajax.responseText
        }
    }
    var datos=new FormData();
    datos.append("imagen",document.getElementById("imagen").files[0]);
    datos.append("titulo",document.getElementById("titulolibro").value);
    datos.append("autor",document.getElementById("autor").value);
    datos.append("editorial",document.getElementById("editorial").value);
    datos.append("anio",document.getElementById("anio").value);
    datos.append("usuario",document.getElementById("usuario").value);
    datos.append("carrera",document.getElementById("carrera").value);
    ajax.send(datos);
}
