const polub = document.querySelector('.polub')
const lanzarotte = document.querySelector('.lanzarotte')
const pekin = document.querySelector('.pekin')
const serengeti = document.querySelector('.serengeti')
const wenecja = document.querySelector('.wenecja')
const tajlandia = document.querySelector('.tajlandia')
const glowny = document.querySelector('.glowny')
let zmiana = 0

polub.addEventListener("click", polubIkona)
lanzarotte.addEventListener("click", zmianaLanzarotte)
pekin.addEventListener("click", zmianaPekin)
serengeti.addEventListener("click", zmianaSerengeti)
wenecja.addEventListener("click", zmianaWenecja)
tajlandia.addEventListener("click", zmianaTajlandia)

function polubIkona() {

    if (zmiana == 0 ) {
        polub.innerHTML = ''
        polub.innerHTML = '<p class="polub">Polub nas <img src="./icon-on.png"></p>'
        zmiana = 1
    } else {
        polub.innerHTML = ''
        polub.innerHTML = '<p class="polub">Polub nas <img src="./icon-off.png"></p>'
        zmiana = 0
    }
}

function zmianaLanzarotte() {
    glowny.innerHTML = ''
    glowny.innerHTML = '<img src="./lanzarotte.jpg" alt="galeria">'
}

function zmianaPekin() {
    glowny.innerHTML = ''
    glowny.innerHTML = '<img src="./pekin.jpg" alt="galeria">'
}

function zmianaSerengeti() {
    glowny.innerHTML = ''
    glowny.innerHTML = '<img src="./serengeti.jpg" alt="galeria">'
}

function zmianaWenecja() {
    glowny.innerHTML = ''
    glowny.innerHTML = '<img src="./wenecja.jpg" alt="galeria">'
}

function zmianaTajlandia() {
    glowny.innerHTML = ''
    glowny.innerHTML = '<img src="./tajlandia.jpg" alt="galeria">'
}