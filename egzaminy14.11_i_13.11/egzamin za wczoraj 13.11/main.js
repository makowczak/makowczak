function dodajDoKoszyka() {
    const file = document.getElementById('file').files[0]
    const liczbaKopii = +document.getElementById('liczbaKopii').value
    const rodzajPapieru = document.querySelector('input[type=radio]:checked').value
    
    let cena = 0
    
    if (rodzajPapieru == "blyszczacy") {
        cena = liczbaKopii * 1.5
    }
    if (rodzajPapieru == "matowy") {
        cena = liczbaKopii * 2
    }
    
    const newImg = document.createElement("img")
    newImg.src = file.name
    const newP1 = document.createElement("p")
    newP1.innerHTML = `Liczba kopii: ${liczbaKopii}`
    const newP2 = document.createElement("p")
    newP2.innerHTML = `Cena: ${cena}`
    const koszyk = document.getElementById("koszyk")
    koszyk.appendChild(newImg)
    koszyk.appendChild(newP1)
    koszyk.appendChild(newP2)
}