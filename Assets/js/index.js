function cargarAdministrador() {

    const url = base_url + "Administrador/getAllAdministrador/";

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

        var contenedor0 = document.createElement("div");
        document.body.appendChild(contenedor0);


        //le añado un id al elemento div1
        var div = document.getElementsByTagName("div")[0];
        div.className = "flex-container";
        div.id = "contenedor";

        var mostrarInfo = res.map(function (administrador) {
            return '<div>'
                + '<h4>' + administrador.nombre_completo + '</h4>'
                + '</div>';
        }).join('')
        document.getElementById("contenedor").innerHTML = mostrarInfo;


    })
    .catch(function (err) {
        console.log(err);
    });



} 