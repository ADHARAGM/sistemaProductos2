<x-app-layout>
    <div class="recuadro">        
      <div class="col-sm-10">
          @csrf
            <table class="table table-dark">
                <thead>
                    <tr>
                      <th scope="col">Nombre del Producto</th>
                      <th scope="col">Descripción</th>
                      <th scope="col">Precio</th>
                      <th scope="col">Fecha Compra</th>
                      <th scope="col">Categoria</th>
                      <th scope="col">Sucursal</th>
                      <th scope="col">Eliminar</th>
                      <th scope="col">Editar</th>
                    </tr>
                </thead>
                  <tbody>
                    @forelse($datos as $key)
                    <tr>
                        <td>{{$key->nombreProducto;}}</td>
                        <td>{{$key->descrip;}}</td>
                        <td>{{$key->precio;}}</td>
                        <td>{{$key->fecha_compra;}}</td>
                        <td>{{$key->categorias->categoria;}}</td>
                        <td>{{$key->sucursales->nombreSucursal;}}</td>
                        <td> 
                           <form style="margin:0px;" method="post" action="{{route('creaProductos.destroy',$key->id_producto)}}">
                             @csrf 
                            <button class="btn btn-primary" type="submit"  onclick="return confirm('¿desea borrar?');">Borrar</button>    
                           </form>                         
                        </td>
                        <td>
                           <a class="btn btn-info" href="{{route('producto.editaProducto',$key->id_producto)}}">
                               Editar
                            </a>
                            
                        </td>
                    </tr>
                    @empty
                    @endforelse                      
                  </tbody>
            </table>  
        </div>                
    </div>
</x-app-layout>
