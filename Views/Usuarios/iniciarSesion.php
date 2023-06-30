<?php include "Views/Templates/header.php";?>

<div class="card w-75 m-auto mt-5 inicio p-5">
    <div class="card-header">
    <h3 class="text-center">Inicio de sesión</h3>
    </div>
    
    <div class="card-body formcontacto ">
        <form id="frmInicioSesion" class="w-100">
            <div class="form-group">
                <label for="nombre_de_usuario">Nombre de usuario</label>
                <input type="text" class="form-control" id="nombre_de_usuario" name="nombre_de_usuario" placeholder="Nombre de usuario">
            </div>
            <div class="form-group">
                <label for="contrasenia">Contraseña</label>
                <input type="password" class="form-control" id="contrasenia" name="contrasenia" placeholder="Contraseña">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipo" value="usuario" id="flexRadioDefault1">
                   <label class="form-check-label" for="flexRadioDefault1">
                        Usuario
                    </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" value="administrador" name="tipo" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Administrador
                </label>
            </div>

            <br>

            <button class="btn back w-100" id="btnAccion" type="button" onclick="inicioSesion(event);">Iniciar Sesión</button>
        </form> 
    </div>
</div>
    
    

    

<?php include "Views/Templates/footer.php";?>

