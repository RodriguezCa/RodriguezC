document.querySelector(".btn").addEventListener("click",async()=>{

    let respuesta = await fetch("datos.php")
    let datos = await respuesta.json()
    
    document.querySelector("#NombresEmpleado").value = datos.nombre
    document.querySelector("#ApellidosEmpleado").value = datos.apellido
    document.querySelector("#rfcEmpleado").value = datos.rfc
    document.querySelector("#curpEmpleado").value = datos.curp
    document.querySelector("#nssEmpleado").value = datos.nss
    document.querySelector("#eMailEmpleado").value = datos.eMail
    document.querySelector("#telEmpleado").value = datos.tel
    document.querySelector("#DireccionEmpleado").value = datos.Direccion
    document.querySelector("#ColEmpleado").value = datos.Col
    document.querySelector("#EstEmpleado").value = datos.Est

})
