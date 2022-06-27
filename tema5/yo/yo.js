function cargar(direccion) {
    fetch(direccion)
        .then(response => response.text())
        .then(data => document.getElementById("contenido").innerHTML = data)
        .catch(error => console.log(error));
}
function contacto() {
    var formulario = document.getElementById("formulario");
    var datos = new FormData(formulario);
    fetch("contacto.php",
        {
            method: "POST",
            body: datos
        })
        .then(response => response.text())
        .then(data => document.getElementById("contenido").innerHTML = data)
        .catch(error => console.log(error));
}