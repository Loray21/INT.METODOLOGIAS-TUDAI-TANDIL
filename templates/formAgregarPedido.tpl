<h2>Complete los siguiente datos</h2>
<form action="nuevoPedido" method="POST">

  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Nombre</label>
      <input name="nombre" type="text" class="form-control" placeholder="Nombre">
    </div>
    <div class="form-group col-md-6">
      <label>Apellido </label>
      <input name="apellido" type="text" class="form-control" placeholder="Apellido">
    </div>
    <div class="form-group col-md-6">
        <label>Direccion</label>
        <input name="direccion" type="text" class="form-control" placeholder="Direccion" >
    </div>
    <div class="form-group col-md-6">
        <label>Telefono</label>
        <input name="telefono" type="text" class="form-control" placeholder="Telefono" >
    </div>
    <div class="form-group col-md-6">
        <label>Franja horaria</label>
        <input name="franja_horaria" type="text" class="form-control" placeholder="Horario de preferencia" >
    </div>
    <div class="form-group col-md-6">
        <label>Selecione la categoria de sus materiales</label>
        <select class="form-select" aria-label="Default select example" name="categoria_volumen">
            <option value="Entra en un carro" selected>Entra en un carro</option>
            <option value="Entra en el baul de un auto">Entra en el baul de un auto</option>
            <option value="Necesito una camioneta">Necesito una camioneta</option>
            <option value="Necesito un camion">Necesito un camion</option>
          </select>
    </div>
    <div class="form-group col-md-6">
        <label>Imagen</label>
        <input name="imagen" type="file" class="form-control" placeholder="Imagen" >
    </div>
 </div>

  <button type="submit" class="btn btn-primary btn-pill mt-3">Enviar</button>

</form>

