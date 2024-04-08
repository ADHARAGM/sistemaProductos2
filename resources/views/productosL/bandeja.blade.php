<x-app-layout>
    <div class="recuadro">        
          <form class="col-sm-10" method="post" action="{{route('producto.createProducto') }}">@csrf
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                      <th scope="col">Nombre del Producto</th>
                      <th scope="col">Descripción</th>
                      <th scope="col">Precio</th>
                      <th scope="col">Fecha Compra</th>
                      <th scope="col">Categoria</th>
                      <th scope="col">Sucursal</th>
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
                    </tr>
                    @empty
                    @endforelse

                  </tbody>
            </table>
          </form>      
        </div>                
    </div>
</x-app-layout>
