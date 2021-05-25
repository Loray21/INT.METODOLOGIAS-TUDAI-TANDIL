<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
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
            <option selected>Entra en un carro</option>
            <option value="1">Entra en un carro</option>
            <option value="2">Entra en el baul de un auto</option>
            <option value="3">Necesito una camioneta</option>
            <option value="4">Necesito un camion</option>
          </select>
        
    </div>
    <div class="form-group col-md-6">
        <label>Imagen</label>
        <input name="imagen" type="file" class="form-control" placeholder="Imagen" >
    </div>
 </div>

  <button type="submit" class="btn btn-primary">Enviar</button>

</form>

