function registrarUsuario(e){
    e.preventDefault();

    const frm = document.getElementById("frmRegistrarUsuario");
    const form = new FormData(frm);

    const url = base_url + "Usuarios/registrar";

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

        alertas(res.msg,res.icono);
    })
    .catch(function (err) {
        console.log(err);
    });

}

function inicioSesion(e){
    e.preventDefault();

    const frm = document.getElementById("frmInicioSesion");

    console.log(frm);

    const form = new FormData(frm);

    const url = base_url + "Usuarios/iniciarSesionAccion";

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

        console.log(texto);

        const res = JSON.parse(texto);

        if (res == "usuario") {
            window.location = base_url + "Cotizacion";
        }else if (res == "admin") {
            window.location = base_url + "Administracion";
        } else {
            alertas("Error de usuario o contraseña","error");
        }
    })
    .catch(function (err) {
        console.log(err);
    });
}