let btn_fast = document.querySelector("#btn-fast");
let btn_modal_fast = document.querySelector('#btn-modal-fast');
let btn_modal_slow = document.querySelector('#btn-modal-slow');
let btn_slow = document.querySelector('#btn-slow');
let btn_close_modal = document.querySelector('.close-modal');
let btn_close_modal_video = document.querySelector('#btn-modal-close-video');


btn_close_modal_video.addEventListener('click', function () {
    console.log("cliquei");
    $('.video-relax')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
});


btn_fast.addEventListener('click', function () {
    zerarModal();
    respiracaoRapida();
})

btn_slow.addEventListener('click', function () {
    zerarModal();
    respiracaoLenta();
})

btn_modal_fast.addEventListener('click', function () {
    zerarModal();
})

btn_modal_slow.addEventListener('click', function () {
    zerarModal();
})

btn_close_modal.addEventListener('click', function () {
    zerarModal();
})


function zerarModal() {
    let div_inspire = document.querySelector('.div-inspire');
    let div_expire = document.querySelector('.div-expire');
    let contador = document.querySelector('.contador');

    let div_inspire_slow = document.querySelector('#div-inspire-slow');
    let div_secure_slow = document.querySelector('#div-secure-slow');
    let div_expire_slow = document.querySelector('#div-expire-slow');
    let contador_slow = document.querySelector('#contador-slow');


    div_inspire.setAttribute('hidden', 'hidden');
    div_expire.setAttribute('hidden', 'hidden');
    contador.innerText = ' ';

    div_inspire_slow.setAttribute('hidden', 'hidden');
    div_secure_slow.setAttribute('hidden', 'hidden');
    div_expire_slow.setAttribute('hidden', 'hidden');
    contador_slow.innerText = ' ';
    clearInterval();

}

function respiracaoRapida() {

    let div_inspire = document.querySelector('.div-inspire');

    div_inspire.removeAttribute('hidden');
    getContadorFast('inspire');

}

function respiracaoLenta() {

    console.log("sera");
    getContadorSlow('inspire');

}


function getContadorFast(action){

    let contador = document.querySelector('.contador');
    let div_inspire = document.querySelector('.div-inspire');
    let div_secure = document.querySelector('.div-secure');
    let div_expire = document.querySelector('.div-expire');
    let inicial = 0;
    let cont = 0;

    switch (action) {
        case 'inspire':
                div_inspire.removeAttribute('hidden');
                inicial = 3;
                cont = setInterval(() => {
                contador.innerText = inicial;
                inicial--;
                if(inicial < 0){
                    clearInterval(cont);
                }

                if(inicial == 0){

                    setTimeout(function () {
                        console.log("entrei no timeout");
                        div_inspire.setAttribute('hidden', 'hidden');
                        div_secure.removeAttribute('hidden');

                        getContadorFast('segure');
                    }, 1000)
                }
            },1000);
            break;
        case 'segure':
                inicial = 2;
                cont = setInterval(() => {
                contador.innerText = inicial;
                inicial--;
                if(inicial < 0){
                    clearInterval(cont);
                }

                if(inicial == 0){

                    setTimeout(function () {
                        console.log("entrei no timeout");
                        div_secure.setAttribute('hidden', 'hidden');
                        div_expire.removeAttribute('hidden');

                        getContadorFast('expire');
                    }, 1000)

                }
            },1000);
            break;
        case 'expire':
            inicial = 4;
            cont = setInterval(() => {
                contador.innerText = inicial;
                inicial--;
                if(inicial < 0){
                    clearInterval(cont);
                }
            },1000);
            break;

    }
}

function getContadorSlow(action){

    let contador = document.querySelector('#contador-slow');
    let div_inspire = document.querySelector('#div-inspire-slow');
    let div_secure = document.querySelector('#div-secure-slow');
    let div_expire = document.querySelector('#div-expire-slow');
    let inicial = 0;
    let cont = 0;

    switch (action) {
        case 'inspire':
            console.log("cheguei aqui tb");
            div_inspire.removeAttribute('hidden');
            inicial = 4;
            cont = setInterval(() => {
                contador.innerText = inicial;
                inicial--;
                if(inicial < 0){
                    clearInterval(cont);
                }

                if(inicial == 0){

                    setTimeout(function () {
                        console.log("entrei no timeout");
                        div_inspire.setAttribute('hidden', 'hidden');
                        div_secure.removeAttribute('hidden');

                        getContadorSlow('segure');
                    }, 1000)
                }
            },1000);
            break;
        case 'segure':
            inicial = 3;
            cont = setInterval(() => {
                contador.innerText = inicial;
                inicial--;
                if(inicial < 0){
                    clearInterval(cont);
                }

                if(inicial == 0){

                    setTimeout(function () {
                        console.log("entrei no timeout");
                        div_secure.setAttribute('hidden', 'hidden');
                        div_expire.removeAttribute('hidden');

                        getContadorSlow('expire');
                    }, 1000)

                }
            },1000);
            break;
        case 'expire':
            inicial = 8;
            cont = setInterval(() => {
                contador.innerText = inicial;
                inicial--;
                if(inicial < 0){
                    clearInterval(cont);
                }
            },1000);
            break;

    }
}
