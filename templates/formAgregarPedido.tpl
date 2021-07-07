<div class="row">
  <div class="col w-100">
    <h2>Complete los siguiente datos</h2>
    <form action="nuevoPedido" method="POST">

      <div class="form-row">
        <div class="form-group col-md-12">
          <label>Nombre</label>
          <input name="nombre" type="text" class="form-control" placeholder="Nombre">
        </div>
        <div class="form-group col-md-12">
          <label>Apellido </label>
          <input name="apellido" type="text" class="form-control" placeholder="Apellido">
        </div>

        <div class="row">
          <div class="form-group col-md-6">
            <label>Direccion</label>
            <input name="calle" type="text" class="form-control" placeholder="Calle" >  
          </div>
          <div class="form-group col-md-6">
            <label>Número</label>
            <input name="numero" type="number" class="form-control" placeholder="Número" >
          </div>
        </div>

        <div class="form-group col-md-12">
            <label>Telefono</label>
            <input name="telefono" type="text" class="form-control" placeholder="Telefono" >
        </div>
        <div class="form-group col-md-12">
            <label>Franja horaria</label>
            <input name="franja_horaria" type="text" class="form-control" placeholder="Horario de preferencia" >
        </div>
        <div class="form-group col-md-12">
            <label>Selecione la categoria de sus materiales</label>
            <select class="form-select" aria-label="Default select example" name="categoria_volumen">
                <option value="Entra en un carro" selected>Entra en un carro</option>
                <option value="Entra en el baul de un auto">Entra en el baul de un auto</option>
                <option value="Necesito una camioneta">Necesito una camioneta</option>
                <option value="Necesito un camion">Necesito un camion</option>
              </select>
        </div>
        <div class="form-group col-md-12">
            <label>Imagen</label>
            <input name="imagen" type="file" class="form-control" placeholder="Imagen" >
        </div>
    </div>

      <button type="submit" class="btn btn-primary btn-pill mt-3">Enviar</button>

    </form>
  </div>
  <div class="col position-relative">
    <div class="col-2 position-absolute end-50 start-0 align-middle">
      <img src="{BASE_URL}imagenes/cooperativa_form.png" alt="mapa_tandil" width="400px">
    </div>
  </div>
<div>
  
