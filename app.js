const formulario = document.querySelector('#denuncia-form');
formulario.addEventListener('submit', function(e) {
    e.preventDefault();

    Swal.fire({
        icon: 'warning',
        title: '¿Documento adjuntado correctamente?',
        text: 'Caso contrario su denuncia no sera tomanda en cuenta',
        
        showCancelButton: true,
        confirmButtonText: 'Sí',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            if (validarCampos()) {
                enviarDenuncia();
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'Advertencia',
                    text: 'Todos los campos deben ser completados correctamente'
                });
            }
        }
    });
});
function validarCampos() {
    const nombre = document.querySelector('#nombre').value;
    const email = document.querySelector('#email').value;
    const celular = document.querySelector('#celular').value;
    const mensaje = document.querySelector('#mensaje').value;

    if (nombre.trim() === '' || email.trim() === '' || celular.trim() === '' || mensaje.trim() === '') {
        return false;
    }

    return true;
}

function enviarDenuncia() {
    const datos = new FormData(formulario);
    fetch('enviar.php', {
        method: 'POST',
        body: datos
    })
    .then(res => res.json())
    .then(res => {
        console.log(res);

        if (res.trim() === 'exito') {
            Swal.fire({
                icon: 'success',
                title: 'Éxito',
                text: 'Denuncia enviada con éxito'
            });

            formulario.reset();
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Error al enviar mensaje',
                text: 'Error al enviar mensaje'
            });
        }
    });
}








