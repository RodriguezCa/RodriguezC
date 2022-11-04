$(document).ready(function () {
  $(".contenedor").click(function (e) {
    console.log(e.target);
    $(e.target).html("Hola mundo");
  });
});
