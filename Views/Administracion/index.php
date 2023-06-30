<?php include "Views/Templates/header.php";?>

    <div class="container p-3">
        <h1>Panel de administración</h1>

        <div class="table-responsive">
            <table data-order='[[ 0, "desc" ]]' id="tblCotizacion" class="table table-hover display responsive no-wrap" width="100%">
                <thead class="thead-dark">
                    <tr>
                        <th>Fecha</th>
                        <th>Titulo</th>
                        <th>Monto</th>
                        <th>Servicios</th>
                        <th>Nombre usuario</th>
                        <th>Telefono</th>
                        <th>Disponibilidad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
        

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h1 class="modal-title fs-5" id="titulo">Registro de evento</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>


                <div class="modal-body">
                    <form method="post" id="frmCotizacion">
                        
                        <div class="form-group">
                            <input id="id_cotizacion" type="hidden" name="id_cotizacion">
                        </div>

                        <div class="form-group">
                            <label for="disponibilidad">Disponibilidad del evento</label><br>
                            <select name="disponibilidad" id="disponibilidad">
                                <option>En espera</option>
                                <option>Apartado</option>
                                <option>Finalizado</option>
                            </select>
                        </div>

                            
                        <button class="btn btn-primary" id="btnAccion" type="button" onclick="editarCotizacion(event);">Editar</button>
                        <button class="btn btn-danger" id="btnAccion" type="button" data-dismiss="modal">Cancelar</button>
                    </form>
                </div>

                
        
            </div>
        </div>
    </div>



<?php include "Views/Templates/footer.php";?>
