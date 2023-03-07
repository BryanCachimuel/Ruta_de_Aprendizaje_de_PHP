/* capturando el id del boton del formulario
   formulario_productos -> hace referencia al id que se le da al formulario
*/
registrar.addEventListener("click", () => {
    fetch("../src/registrar.php", {
        method: "POST",
        body: new FormData(formulario)
    }).then(response => response.text()).then(response => {   /* esta promesa se conecta con el archivo de registrar.php */
        if(response == "ok"){                                /* este ok hace referencia al echo definido al final del script del archivo registrar.php*/
            Swal.fire({
                icon: 'success',
                title: 'Producto Registrado Correctamente',
                showConfirmButton: false,
                timer: 1500
            })
            formulario.reset();
        }
    })
});
