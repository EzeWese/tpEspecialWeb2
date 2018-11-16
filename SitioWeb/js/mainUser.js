'use strict'
let templateComentarios;

fetch('js/templates/comentariosUser.handlebars')
  .then(response => response.text())
  .then(template => {
    templateComentarios = Handlebars.compile(template); // compila y prepara el template
    let idProducto = document.querySelector("#IdProducto").value;
    getComentarios(idProducto);
    timer = setInterval(function () { getComentarios(idProducto); }, 2000);
  });

function getComentarios(idProducto) {
  fetch("api/comentario/"+idProducto)
    .then(response => response.json())
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
  document.querySelector('.btn-enviarComentario').addEventListener('click', e => enviarComentario());
}

function enviarComentario() {
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
          getComentarios(idProd)
      );
}
