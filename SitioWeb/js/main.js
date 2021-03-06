'use strict'
let templateComentarios;
let idProducto = document.querySelector("#IdProducto").value;
let orden = document.querySelector('.btn-Ascendente').value;

document.querySelector('.btn-Descendente').addEventListener('click', function(){ orden = this.value; });
document.querySelector('.btn-Descendente').addEventListener('click', e => getComentarios(idProducto, orden));

document.querySelector('.btn-Ascendente').addEventListener('click', function(){ orden = this.value; });
document.querySelector('.btn-Ascendente').addEventListener('click', e => getComentarios(idProducto, orden));

fetch('js/templates/comentarios.handlebars')
  .then(response => response.text())
  .then(template => {
    templateComentarios = Handlebars.compile(template); // compila y prepara el template
    getComentarios(idProducto, orden);
  });

let timer = setInterval(function () { getComentarios(idProducto, orden); }, 2000);

function getComentarios(idProducto, orden) {
  fetch("api/comentario/"+idProducto)
    .then(response => response.json())
    .then(jsonComentarios => sortJSON(jsonComentarios, 'puntaje', orden))
    .then(jsonComentarios => {
      mostrarComentarios(jsonComentarios);
    })
}

function mostrarComentarios(jsonComentarios) {
  let context = { // como el assign de smarty
    comentarios: jsonComentarios
    //otra: "hola
  }
  let html = templateComentarios(context);
  document.querySelector("#comentarios-container").innerHTML = html;
}

function sortJSON(data, key, orden) {
    return data.sort(function (a, b) {
        var x = a[key],
        y = b[key];

        if (orden === 'asc') {
            return ((x < y) ? -1 : ((x > y) ? 1 : 0));
        }

        if (orden === 'desc') {
            return ((x > y) ? -1 : ((x < y) ? 1 : 0));
        }
    });
}
