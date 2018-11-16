'use strict'
let templateComentarios;

fetch('js/templates/comentarios.handlebars')
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
}
