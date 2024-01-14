const powierzchnia = document.querySelector('.powierzchnia')
const policz = document.querySelector('.policz')
const wynikp = document.querySelector('.wynikp')

policz.addEventListener("click", wylicz)


function wylicz() {
   
    if (powierzchnia.value < 2) {
        wynikp.innerHTML = `Liczba potrzebnych puszek: 1`

    } else {
    let wynik = (powierzchnia.value / 4)
    wynik = Math.ceil(wynik) 
    wynikp.innerHTML = `Liczba potrzebnych puszek: ${wynik}`
   
    }
    
}
