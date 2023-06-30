
<?php include "Views/Templates/header.php";?>

    
    <div class="container">
        <h1>Cotización</h1>

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
                    <h1 class="modal-title fs-5" id="titulo">Registro de evento</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form id="formulario">
                    <div class="modal-body">
                        
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="start" name="fecha">
                            <label for="start" class="form-label">Fecha</label>
                        </div>

                        <div class="mb-3">
                            <label for="nombreEvento" class="form-label">Nombre del evento</label>
                            <input type="text" class="form-control" id="tituloEvento" name="nombreEvento" placeholder="Nombre del evento">
                        </div>

                        <h4>Servicios disponibles (Opcional)</h4>

                        <?php foreach($data as $row){ ?>
                            <div class="form-check">
                                <input class="form-check-input" name="servicio[]" type="checkbox" value="<?php echo  $row['nombre'];?>" id="check">
                                <label class="form-check-label" for="flexCheckDefault">
                                    <?php echo $row['nombre']; ?> - $<?php echo $row['costo']; ?>
                                </label>
                            </div>
                        <?php } ?>



                    </div>

                    <div class="modal-footer">
                        <button class="btn back" id="btnAccion" type="submit">Registrar</button>
                    </div>
                </form>
        
            </div>
        </div>
    </div>


    <!-- <div class="modal fade" id="exampleCheck" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h1 class="modal-title fs-5" id="titulo">Registro de evento</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form id="formulario2">
                    <div class="modal-body">
                        
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="start" name="fecha">
                            <label for="start" class="form-label">Fecha</label>
                        </div>

                        <div class="mb-3">
                            <label for="nombreEvento" class="form-label">Nombre del evento</label>
                            <input type="text" class="form-control" id="tituloEvento" name="nombreEvento" placeholder="Nombre del evento">
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-info" id="btnAccion" type="submit">Registrar</button>
                    </div>
                </form>
        
            </div>
        </div>
    </div> -->
<?php include "Views/Templates/footer.php";?>