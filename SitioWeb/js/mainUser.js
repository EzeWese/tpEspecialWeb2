'use strict'
let templateComentarios;

fetch('js/templates/comentariosUser.handlebars')
  .then(response => response.text())
  .then(template => {
    templateComentarios = Handlebars.compile(template); // compila y prepara el template
    let idProducto = document.querySelector("#IdProducto").value;
    getComentarios(idProducto);
  });

function getComentarios(idProducto) {
  fetch("api/comentario/"+idProducto)
    .then(response => response.json())
    .then(jsonComentarios => {
      mostrarComentarios(jsonComentarios);
    })
}

document.querySelector('.btn-enviarComentario').addEventListener('click', e => enviarComentario());

function mostrarComentarios(jsonComentarios) {
  let context = { // como el assign de smarty
    comentarios: jsonComentarios
    //otra: "hola
  }
  let html = templateComentarios(context);
  document.querySelector("#comentarios-container").innerHTML = html;
}

function enviarComentario() {
  let idProd = document.querySelector("#IdProducto").value;

      let comentario = document.querySelectorAll('.comentario');
      let encuesta = {
          "IdProducto": IdProd,
          "preg1": comentario[0].value,
          "preg2": comentario[1].value,
      }

      fetch("api/comentario", {
          method: 'POST',
          headers: {
              'Content-Type': 'application/json'
          },
          body: JSON.stringify(objeto)
      }).then(response =>
          getComentarios(IdProd)
      );
}
