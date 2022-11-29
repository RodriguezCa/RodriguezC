$(document).ready(function () {
  const settings = {
    async: true,
    crossDomain: true,
    url: "datos.php",
    method: "GET",
    headers: {
      Accept: "/",
    },
  };

  $.ajax(settings).done(function (response) {
    let tabla = JSON.parse(response);
    console.log(tabla);

    $("#jsGrid").jsGrid({
      width: "100%",
      height: "400px",
      inserting: true,
      editing: true,
      sorting: true,
      paging: true,
      data: tabla,
      fields: [
        {
          name: "Nombre",
          type: "text",
          width: 20,
        },

        {
          name: "Apellidos",
          type: "text",
          width: 30,
        },
        {
          name: "RFC",
          type: "text",
          width: 40,
        },
        {
          name: "CURP",
          type: "text",
          width: 50,
        },
        {
          name: "NSS",
          type: "text",
          width: 30,
        },
        {
          name: "EMAIL",
          type: "text",
          width: 50,
        },
        {
          name: "TEL",
          type: "text",
          width: 30,
        },
        {
          name: "Direccion",
          type: "text",
          width: 50,
        },
        {
          name: "Colonia",
          type: "text",
          width: 30,
        },
        {
          name: "Estado Civil",
          type: "text",
          width: 20,
        },
      ],
    });
  });
});
