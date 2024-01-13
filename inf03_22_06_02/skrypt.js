const oblicz = document.querySelector('.oblicz')
const rodzaj = document.querySelector('.rodzaj')
const ilosc = document.querySelector('.ilosc')
const wynik = document.querySelector('.wynik')
let cena = 0

function skrypt() {
    if(rodzaj.value == 1) {
        cena = ilosc.value * 4
    } else if (rodzaj.value == 2) {
        cena = ilosc.value * 3.5
    } else {
        cena = 0
    }

    wynik.innerHTML = `koszt paliwa: ${cena}zł`

}

oblicz.addEventListener("click", skrypt)