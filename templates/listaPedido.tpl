<table>
    <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Direccion</th> 
      <th scope="col">Telefono</th>
      <th scope="col">Franja horaria</th>
      <th scope="col">Categoria de materiales</th>   
    </tr>
  </thead>
  <tbody>
    {foreach from=$pedidos item=pedido}
        <tr>
            <th scope="row"> {$material->material|capitalize} </th>
            <td> {$pedido->nombre} </td>
            <td> {$pedido->apellido} </td>
            <td> {$pedido->direccion} </td>
            <td> {$pedido->telefono} </td>
            <td> {$pedido->franja_horaria} </td>
            <td> {$pedido->categoria_volumen} </td>
        </tr>
    {/foreach}
  </tbody>
</table> 