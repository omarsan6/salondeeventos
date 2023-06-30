let fecha;
let frm = document.getElementById("formulario");

document.addEventListener('DOMContentLoaded', function() {
    var fecha = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(fecha, {

        dateClick: function(info) {
            fecha = info.dateStr;
            
            document.getElementById("start").value = fecha;

            $('#exampleModal').modal('show');

        },
        eventSources:[

            {
                url: base_url + 'Cotizacion/listar',
                color: '#0d6efd',   // an option!
                textColor: 'white' // an option!
            },
            {
                url: base_url + 'Cotizacion/listarApartado',
                color: '#198754',   // an option!
                textColor: 'white' // an option!
            },
            {
                url: base_url + 'Cotizacion/listarFinalizado',
                color: '#dc3545',   // an option!
                textColor: 'white' // an option!
            }
            
        ],
        initialView: 'dayGridMonth',
        height:470,
        validRange: {
            start: '2023-05-01',
            end: '2023-12-31'
        },
        selectable: true,
        locales: 'es',
    });
    calendar.render();

    frm.addEventListener('submit',function(e){
        e.preventDefault();
        const title = document.getElementById('tituloEvento').value;

        if(title == ''){

            alertas("Rellene todos los campos","warning");
            
        } else {
            const url = base_url + 'Cotizacion/registrarCotizacion';

            const frmAll = new FormData(frm);

            fetch(url, {
                method: 'POST',
                body: frmAll
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
                alertas(res.msg,res.icono);
                calendar.refetchEvents();
            })
            .catch(function (err) {
                console.log(err);
            });
        }
       
    })
});

function alertas(mensaje,icono){
    Swal.fire({
        position: 'center',
        icon: icono,
        title: mensaje,
        showConfirmButton: false,
        timer: 1500
    })
}

