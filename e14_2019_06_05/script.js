const imie = document.querySelector('.imie')
const nazwisko = document.querySelector('.nazwisko')
const email = document.querySelector('.email')
const usluga = document.querySelector('.usluga')
const regulamin = document.querySelector('.regulamin')
const przeslij = document.querySelector('.przeslij')
const regulaminbrak = document.querySelector('.regulaminbrak')
const regulamin1 = document.querySelector('.regulamin1')
const regulamin2 = document.querySelector('.regulamin2')

przeslij.addEventListener('click', test)

function test() { 
    if(regulamin.checked === true) {
        regulaminbrak.innerHTML = ""
        regulamin1.innerHTML = imie.value + " " + nazwisko.value
        regulamin2.innerHTML = "Treśc Twojej sprawy: " + usluga.value + "<br /> Na podany e-mail zostanie wysłana oferta"
    } else {
        regulaminbrak.innerHTML = "Musisz zapoznać się z regulaminem"
        regulamin1.innerHTML = ""
        regulamin2.innerHTML = ""
    }
}

