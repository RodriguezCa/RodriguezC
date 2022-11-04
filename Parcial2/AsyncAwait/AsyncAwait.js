const btnPeticion = document.querySelector(".btnPeticion")
btnPeticion.addEventListener("click",async function(){
    let respuesta = await fetch("https://api.chucknorris.io/jokes/random")
    let data = await respuesta.json()
    console.log(data)
    document.querySelector(".Peticion").innerHTML = data.value
})