
 <form action="agregarMaterialRecolectado" method="POST" enctype="multipart/form-data">
    <select class="form-select" aria-label="Default select example" name="materialId">
        <option selected >Seleccione una opcion</option>
        {foreach from=$materialesAceptados item=materialAceptado}
            <option value="{$materialAceptado->id}">{$materialAceptado->material}</option>
        {/foreach}
    </select>
    <input class="form-control" type="number"   name="cartoneroId" placeholder="DNI del cartonero">
    <input class="form-control" type="number" name="peso"        placeholder="Kg del material">
    <input   type="submit"  value=agregar  class="btn btn-primary mr-2">
</form>