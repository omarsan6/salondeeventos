<?php include "Views/Templates/header.php";?>
    
    <div class="w-100 p-5">
            <h3>Calendario</h3>
        
            <ul class="list-group list-group-horizontal" style="cursor:pointer;">
            <li class="list-group-item text-bg-primary">
                <p class="m-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="En espera a que se aparte el dia">
                    En espera
                </p>    
            </li>
            <li class="list-group-item bg-success text-white">
                <p class="m-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="El salón ya está apartado">
                    Apartado
                </p>  
            </li>
            <li class="list-group-item text-bg-danger">
                <p class="m-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Evento finalizado">
                    Finalizado
                </p> 
            </li>
            <li class="list-group-item">
                <p class="m-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Dia disponible">
                    Disponible
                </p> 
            </li>
        </ul>
            <div id="calendar" style="cursor:pointer;"></div>
    </div>

        
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header back">
                    <h1 class="modal-title fs-5" id="titulo">¿Quieres cotizar?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form id="formulario">
                    <div class="modal-body">
                        
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="start" name="fecha">
                            <label for="start" class="form-label">Fecha</label>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <a class="btn back" href="<?php echo base_url;?>Usuarios/iniciarSesion">Iniciar sesión</a>
                        <a class="btn back" href="<?php echo base_url;?>Usuarios/registrarUsuario">Registrate</a>
                    </div>
                </form>
        
            </div>
        </div>
    </div>

<?php include "Views/Templates/footer.php";?>