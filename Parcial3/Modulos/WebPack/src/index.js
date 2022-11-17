import Swal from "sweetalert2";
document.querySelector(".btnAlerta"),
  addEventListener("click", function () {
    Swal.fire({
      position: "top-end",
      icon: "success",
      title: "Your work has been saved",
      showConfirmButton: false,
      timer: 1500,
    });
  });
