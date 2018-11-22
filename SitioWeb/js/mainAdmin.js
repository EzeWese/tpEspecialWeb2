'use strict'
let templateComentarios;
let idProducto = document.querySelector("#IdProducto").value;
let orden = document.querySelector('.btn-Ascendente').value;

document.querySelector('.btn-Descendente').addEventListener('click', function(){ orden = this.value; });
document.querySelector('.btn-Descendente').addEventListener('click', e => getComentarios(idProducto, orden));

document.querySelector('.btn-Ascendente').addEventListener('click', function(){ orden = this.value; });
document.querySelector('.btn-Ascendente').addEventListener('click', e => getComentarios(idProducto, orden));

document.querySelector('.btn-enviarComentario').addEventListener('click', e => enviarComentario(orden));

fetch('js/templates/comentariosAdmin.handlebars')
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
      mostrarComentarios(jsonComentarios, orden);
    })
}

function mostrarComentarios(jsonComentarios, orden) {
  let context = { // como el assign de smarty
    comentarios: jsonComentarios
    //otra: "hola
  }
  let html = templateComentarios(context);
  document.querySelector("#comentarios-container").innerHTML = html;
  let botonesBorrarCcomentario = document.querySelectorAll('.btn-borrarComentario');
  botonesBorrarCcomentario.forEach(i => {
      i.addEventListener('click', e => borrarComentario(i.value, orden));
    });
}
function borrarComentario(id, orden){
  let idProd = document.querySelector("#IdProducto").value;
  fetch("api/comentario/"+id, {
      method: 'DELETE'
  }).then(response =>
      getComentarios(idProd, orden)
  );
}

function enviarComentario(orden) {
  let idProd = document.querySelector("#IdProducto").value;
      let comentario = document.querySelectorAll('.comentario');
      let encuesta = {
          "IdProducto": idProd,
          "Comentario": comentario[0].value,
          "Puntaje": comentario[1].value
      }

      fetch("api/comentario/", {
          method: 'POST',
          headers: {
              'Content-Type': 'application/json'
          },
          body: JSON.stringify(encuesta)
      }).then(response =>
          getComentarios(idProd, orden)
      );
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
