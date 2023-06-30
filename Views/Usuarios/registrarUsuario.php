<?php include "Views/Templates/header.php";?>

    <div class="card w-75 m-auto mt-5 inicio p-5">
        <div class="card-header">
            <h3 class="text-center">Registrate</h3>
        </div>

        <div class="card-body formcontacto ">
            <form id="frmRegistrarUsuario" class="w-100">
                <div class="form-group">
                    <label for="nombre_completo">Nombre completo</label>
                    <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" placeholder="Nombre completo">
                </div>

                <div class="form-group">
                    <label for="nombre_de_usuario">Nombre de usuario</label>
                    <input type="text" class="form-control" id="nombre_de_usuario" name="nombre_de_usuario" placeholder="Nombre de usuario">
                </div>

                <div class="form-group">
                    <label for="contrasenia">Contraseña</label>
                    <input type="password" class="form-control" id="contrasenia" name="contrasenia" placeholder="Contraseña">
                </div>

                <div class="form-group">
                    <label for="contraseniaConfirm">Confimar contraseña</label>
                    <input type="password" class="form-control" id="contraseniaConfirm" name="contraseniaConfirm" placeholder="Confirmar contraseña">
                </div>
                
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
                </div>

                <div class="form-group">
                    <label for="correo">Correo electrónico</label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo electrónico">
                </div>

                <br>

                <button class="btn back w-100" id="btnAccion" type="button" onclick="registrarUsuario(event);">Registrar</button>
            </form> 
        </div>
    </div>
<?php include "Views/Templates/footer.php";?>