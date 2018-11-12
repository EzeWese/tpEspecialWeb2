'use strict'


load('html/home.html');
function load(urlPartial) {
    fetch(urlPartial).then(
        function (response) {
            response.text().then(
                function (texto) {
                    document.querySelector('.cuerpo').innerHTML = texto;
                    if (urlPartial == 'html/quiz.html') {
                        document.querySelector('.btn-enviar').addEventListener('click', e => enviarEncuensta());
                        document.querySelector('.btn-enviar3').addEventListener('click', e => enviarEncuensta());
                        document.querySelector('.btn-enviar3').addEventListener('click', e => enviarEncuensta());
                        document.querySelector('.btn-enviar3').addEventListener('click', e => enviarEncuensta());
                        document.querySelector('.btn-filtrar').addEventListener('click', e => Filtrar());
                        document.querySelector('.btn-limpiar').addEventListener('click', e => cargarTabla());
                        cargarTabla();
                        timer = setInterval(function () { cargarTabla(); }, 3000);

                    }
                    else {
                        clearInterval(timer);
                    }
                }
            )
        }
    )
}
function enviarEncuensta() {
    let respuestas = document.querySelectorAll('.respuestas');
    let encuesta = {
        "nombre": respuestas[0].value,
        "preg1": respuestas[1].value,
        "preg2": respuestas[2].value,
    }
    let objeto = {
        "thing": encuesta
    }
    fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(objeto)
    }).then(response =>
        cargarTabla()
    );
}
function cargarTabla() {
    fetch(url).then(r => r.json())
        .then(c => cargar(c.prueba))
        .catch()
    function cargar(z) {
        let t = "";
        for (let i = 0; i < z.length; i++) {
            if (z[i].thing.preg2.toLowerCase() == "tandil") {
                t = t + "<tr class='resaltar'><td>" + z[i].thing.nombre + "</td><td>" + z[i].thing.preg1 + "</td><td>" + z[i].thing.preg2 + "</td><td><button id='' class='" + z[i]._id + " borrar'>Borrar</button></td><td><button id='' class='" + z[i]._id + " editar'>Editar</button></td></tr>";
            }
            else {
                t = t + "<tr class='btn-centrado'><td>" + z[i].thing.nombre + "</td><td>" + z[i].thing.preg1 + "</td><td>" + z[i].thing.preg2 + "</td><td><button id='' class='" + z[i]._id + " borrar'>Borrar</button></td><td><button id='' class='" + z[i]._id + " editar'>Editar</button></td></tr>";
            }
        }
        let tabla = document.querySelector('.tabla-opiniones').innerHTML = t;
        let botonesborrar = document.querySelectorAll('.borrar');
        let botoneseditar = document.querySelectorAll('.editar');
        botonesborrar.forEach(i => {
            i.addEventListener('click', e => Borrar(i.classList[0]));
        });
        botoneseditar.forEach(i => {
            i.addEventListener('click', e => Editar(i.classList[0]));
        });
    }
}
function Borrar(hash) {

    fetch(url + hash, {
        method: 'delete'
    }).then(response =>
        cargarTabla()
    );

}

function Editar(hash) {
    let respuestas = document.querySelectorAll('.respuestas');
    let encuesta = {
        "nombre": respuestas[0].value,
        "preg1": respuestas[1].value,
        "preg2": respuestas[2].value,
    }
    let objeto = {
        "thing": encuesta
    }
    fetch(url + hash, {
        method: 'PUT', "headers": { "Content-Type": "application/json" },
        "body": JSON.stringify(objeto)
    }).then(response =>
        cargarTabla()
    );

}
function Filtrar() {
    let filtro = document.querySelector(".filtrar").value;
    fetch(url).then(r => r.json())
        .then(c => cargar(c.prueba))
        .catch()
    function cargar(z) {
        let t = "";
        for (let i = 0; i < z.length; i++) {
            if (z[i].thing.preg2.toLowerCase() == filtro.toLowerCase()) {
                if (z[i].thing.preg2.toLowerCase() == "tandil") {
                    t = t + "<tr class='resaltar'><td>" + z[i].thing.nombre + "</td><td>" + z[i].thing.preg1 + "</td><td>" + z[i].thing.preg2 + "</td><td><button id='' class='" + z[i]._id + " borrar'>Borrar</button></td><td><button id='' class='" + z[i]._id + " editar'>Editar</button></td></tr>";
                }

                else {
                    t = t + "<tr class='btn-centrado'><td>" + z[i].thing.nombre + "</td><td>" + z[i].thing.preg1 + "</td><td>" + z[i].thing.preg2 + "</td><td><button id='' class='" + z[i]._id + " borrar'>Borrar</button></td><td><button id='' class='" + z[i]._id + " editar'>Editar</button></td></tr>";

                }
            }

        }

        let tabla = document.querySelector('.tabla-opiniones').innerHTML = t;
        let botonesborrar = document.querySelectorAll('.borrar');
        let botoneseditar = document.querySelectorAll('.editar');
        botonesborrar.forEach(i => {
            i.addEventListener('click', e => Borrar(i.classList[0]));
        });
        botoneseditar.forEach(i => {
            i.addEventListener('click', e => Editar(i.classList[0]));
        });
    }
}


let servidor = ;
let url = servidor + "/groups/23-prado-wesenack/prueba/"
let botones = document.querySelectorAll('.js_btn');
botones[0].addEventListener('click', e => load('html/home.html'));
botones[1].addEventListener('click', e => load('html/historia.html'));
botones[2].addEventListener('click', e => load('html/mateWorld.html'));
botones[3].addEventListener('click', e => load('html/quiz.html'));
let timer = undefined;




