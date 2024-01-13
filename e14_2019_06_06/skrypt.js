const przeslij = document.querySelector('.przeslij')
const imie = document.querySelector('.imie')
const nazwisko = document.querySelector('.nazwisko')
const email = document.querySelector('.email')
const usluga = document.querySelector('.usluga')
const wynik = document.querySelector('.wynik')


przeslij.addEventListener("click", skrypt)

function skrypt() {
    wynik.innerHTML = `${imie.value} ${nazwisko.value} <br> <span>${email.value}</span><br>Usługa: ${usluga.value} `
}