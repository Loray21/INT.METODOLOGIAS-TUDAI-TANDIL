<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">apellido</th>
      <th scope="col">DNI</th>   
      <th scope="col">franja horaria de preferencia</th>
      <th scope="col">dirección</th> 
      <th scope="col">teléfono</th>
      <th scope="col">vehículo</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$cartoneros item=cartonero}
        <tr>
            <td> {$cartonero->nombre} </td>
            <td> {$cartonero->apellido} </td>
            <td> {$cartonero->dni} </td>
            <td> {$cartonero->franja_horaria_preferida} </td>
            <td> {$cartonero->direccion} </td>
            <td> {$cartonero->telefono} </td>
            <td> {$cartonero->vehiculo} </td>
        </tr>
    {/foreach}
  </tbody>
</table> 
