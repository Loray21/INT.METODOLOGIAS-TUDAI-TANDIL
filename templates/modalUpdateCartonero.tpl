<div class="updateCartoneroModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Actualizar</h5>
                <button type="button" class="btn-close iconCloseUpdateCartonero" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id= "updateCartoneroForm" action="update-cartonero" method="POST">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-6">
                            <input class="form-control" id= "cartoneroName" type="text"  name="cartoneroName">
                            <input class="form-control" id= "cartoneroSurname" type="text"  name="cartoneroSurname">
                            <input class="form-control" id= "cartoneroDocument" type="text"  name="cartoneroDocument">
                            <input class="form-control" id= "cartoneroHorario" type="text"  name="cartoneroHorario">
                            <input class="form-control" id= "cartoneroAddress" type="text"  name="cartoneroAddress">
                            <input class="form-control" id= "cartoneroPhone" type="text"  name="cartoneroPhone">
                            <input class="form-control" id= "cartoneroVehicle" type="text"  name="cartoneroVehicle">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary iconCloseUpdateCartonero" data-bs-dismiss="modal">Cerrar</button>
                    <input type="submit" value=Guardar class="btn btn-primary iconClose">
                </div>
            </form>

        </div>
    </div>
</div>
