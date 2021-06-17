<div class="showModalUpdate" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Actualizar</h5>
                <button type="button" class="btn-close iconClose" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id= "updateMaterialForm" action="home" method="POST">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-6">
                            <input class="form-control invisible" id= "materialId" type="text"  name="materialId">
                            <input class="form-control" id= "materialName" type="text"  name="materialName">
                            <select class="form-select" aria-label="Default select example" id = "materialAccepted" name="materialAccepted">
                                <option name = "aceptado" value="1" selected >Aceptado</option>
                                <option name= "rechazado " value="0">Rechazado</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary iconClose" data-bs-dismiss="modal">Cerrar</button>
                    <input type="submit" value=Guardar class="btn btn-primary iconClose">
                </div>
            </form>

        </div>
    </div>
</div>
