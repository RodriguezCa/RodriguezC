function ajaxFunction()
{
    var ajaxRequest;
    ajaxRequest = new XMLHttpRequest();


    ajaxRequest.onreadystatechange = function()
    {
        if(ajaxRequest.readyState==4)
        {
            document.Formulario.Hora.value = ajaxRequest.responseText;
        }
    };
    ajaxRequest.open("GET", "cargarControl.php",true);
    ajaxRequest.send();
}