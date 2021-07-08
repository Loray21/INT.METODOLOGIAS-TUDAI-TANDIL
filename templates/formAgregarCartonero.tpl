<form action="agregarCartonero" method="POST" enctype="multipart/form-data">
    <input class="form-control" type="text"   name="nombre"    placeholder="nombre" required>
    <input class="form-control" type="text"   name="apellido"  placeholder="apellido" required>
    <input class="form-control" type="number" name="dni"       placeholder="dni" required>
    <input class="form-control" type="text"   name="franja_horaria_preferida" placeholder="franja horaria" required>
    <input class="form-control" type="text"   name="direccion" placeholder="direccion" required>
    <input class="form-control" type="text"   name="vehiculo"  placeholder="vehiculo"  required>
    <input class="form-control" type="number" name="telefono"  placeholder="telefono"  required>
    <input   type="submit"  value="agregar cartonero"  class="btn btn-primary mr-2">
</form>