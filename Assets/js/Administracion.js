const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

let tblCotizacion;

document.addEventListener("DOMContentLoaded", function () {
    tblCotizacion = $('#tblCotizacion').DataTable({
        ajax: {
            url: base_url + "Administracion/listar",
            dataSrc: ''
        },
        responsive: true,
        language: {
            "decimal": "",
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
            "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
            "infoFiltered": "(Filtrado de _MAX_ total entradas)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ Entradas",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        },
        columns: [
            {
                data: 'start',
            },
            {
                data: 'title',
            },
            {
                data: 'monto'
            },
            {
                data: 'servicios'
            },
            {
                data: 'nombre_completo'
            },
            {
                data: 'telefono'
            },
            {
                data: 'disponibilidad'
            },
            {
                data: 'acciones'
            }
        ]
    })

})

function btnEditarCotizacion(id_cotizacion){
    $('#exampleModal').modal("show");

    document.getElementById("id_cotizacion").value = id_cotizacion
}

function editarCotizacion(){

    const url = base_url + "Administracion/editar";
    const frm = document.getElementById("frmCotizacion");
    const form = new FormData(frm);

    fetch(url, {
        method: 'POST',
        body: form
    })
    .then(function (response) {
        if (response.ok) {
            return response.text();
        } else {
            throw "Error en la llamada Ajax";
        }
    })
    .then(function (texto) {

        const res = JSON.parse(texto);

        if(res == 'ok'){
            alertas("Cotización editada","success");
            tblCotizacion.ajax.reload();
            $('#exampleModal').modal('hide');
        } else {
            alertas("Error al editar cotización","error");
        }


    })
    .catch(function (err) {
        console.log(err);
    });
}

function btnEliminarCotizacion(id_cotizacion){
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
      })
      
      swalWithBootstrapButtons.fire({
        title: '¿Estás seguro?',
        text: "Eliminaras el evento",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Eliminar',
        cancelButtonText: 'Cancelar',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {


            const url = base_url + "Administracion/eliminar/"+id_cotizacion;

            fetch(url, {
                method: 'GET',
            })
            .then(function (response) {
                if (response.ok) {
                    return response.text();
                } else {
                    throw "Error en la llamada Ajax";
                }
            })
            .then(function (texto) {

                const res = JSON.parse(texto);

                if(res == "ok"){

                    swalWithBootstrapButtons.fire(
                        'Eliminado',
                        'La cotización ha sido eliminada',
                        'success'
                    )

                    tblCotizacion.ajax.reload();
                } else {
                    alertas("Error al eliminar la cotización","error");
                }

                

                
            })
            .catch(function (err) {
                console.log(err);
            });


        




        } else if (
          /* Read more about handling dismissals below */
          result.dismiss === Swal.DismissReason.cancel
        ) {
          swalWithBootstrapButtons.fire(
            'Cancelado',
            'La cotización sigue activa',
            'error'
          )
        }
      })
}