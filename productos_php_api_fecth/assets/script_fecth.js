/* capturando el id del boton del formulario
   formulario_productos -> hace referencia al id que se le da al formulario

   esta promesa them se conecta con el archivo de registrar.php 
   este "ok" hace referencia al echo definido al final del script del archivo registrar.php
*/
ListarProductos();
function ListarProductos(busqueda) {
  fetch("listar.php", {
    method: "POST",
    body: busqueda,
  })
    .then((response) => response.text())
    .then((response) => {
      resultado.innerHTML = response;
    });
}

registrar.addEventListener("click", () => {
  fetch("/productos_php_api_fecth/src/registrar.php", {
    method: "POST",
    body: new FormData(formulario),
  })
    .then((response) => response.text())
    .then((response) => {
      if (response == "ok") {
        Swal.fire({
          icon: "success",
          title: "Producto Registrado Correctamente",
          showConfirmButton: false,
          timer: 1500,
        });
        formulario.reset();
      }
    });
});

function Editar(id) {
    fetch("editar.php", {
        method: "POST",
        body: id
    }).then(response => response.json()).then(response => {
        idp.value = response.id;
        codigo.value = response.codigo;
        producto.value = response.producto;
        precio.value = response.precio;
        cantidad.value = response.cantidad;
        registrar.value = "Actualizar"
    })
}
