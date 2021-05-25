<head>
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
        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categoria
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </div>
        
    </div>
    <div class="form-group col-md-6">
        <label>Imagen</label>
        <input name="imagen" type="file" class="form-control" placeholder="Imagen" >
    </div>
 </div>

  <button type="submit" class="btn btn-primary">Enviar</button>

</form>