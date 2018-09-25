/*'use strict'


load('html/home.html');
function load(urlPartial) {
    fetch(urlPartial).then(
        function (response) {
            response.text().then(
                function (texto) {
                    document.querySelector('.cuerpo').innerHTML = texto;
                }
            )
        }
    )
}

let botones = document.querySelectorAll('.js_btn');
botones[0].addEventListener('click', e => load('html/home.html'));
botones[1].addEventListener('click', e => load('html/historia.html'));
botones[2].addEventListener('click', e => load('html/mateWorld.html'));
botones[3].addEventListener('click', e => load('php/index.php'));

//Aca en "botones[3]" cambie el quiz html que llama en load, por index.php
*/
