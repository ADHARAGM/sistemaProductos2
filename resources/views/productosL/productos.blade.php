<x-app-layout>
    <div class="recuadro">        
          <form class="col-sm-10" method="post" action="{{route('producto.createProducto') }}">@csrf
            <div class="col-sm-12 lineal">
                <div class="col-md-4">
                    <label  class="form-label">Nombre del producto</label>
                    <input type="text" class="block mt-1 w-full form-control" id="nomProducto" name="nomProducto" placeholder="Nombre" required autofocus>
                </div>
                <div class="col-md-4">
                    <label  class="form-label">Descripción</label>
                    <input type="text" class="block mt-1 w-full form-control" id="descrip" name="descrip" placeholder="-Descripción" required autofocus>
                </div>
                 <div class="col-md-3">
                    <label  class="form-label">Categoria</label>
                    <select id="id_categoria"  name="id_categoria" class=" block mt-1 w-full form-control" required autofocus>
                        @foreach($datos['categorias'] as $key)
                            <option value="{{$key['id_categoria']}}">
                                {{$key['categoria']}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-12 lineal">           
                 <div class="col-md-4">
                    <label  class="form-label">Sucursal</label>
                    <select id="id_sucursal"  name="id_sucursal" class=" block mt-1 w-full form-control" required autofocus>
                        @foreach($datos['sucursales'] as $key)
                            <option value="{{$key['id_sucursal']}}">
                                {{$key['nombreSucursal']}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label  class="form-label">Precio</label>
                    <input type="number" class="block mt-1 w-full form-control" id="precio" name="precio" placeholder="Precio" required autofocus>
                </div>
                <div class="col-md-3">
                    <label  class="form-label">Fecha de compra</label>
                    <input type="date" class="block mt-1 w-full form-control" id="usuario" name="fecha" placeholder="fecha" required autofocus>
                </div>
            </div>
            <div class="col-sm-12 align-right">            
                <div class="col-sm-2 ">
                     <button type="submit" class="btn btn-primary">Registrar</a>
                </div>
            </div>
          </form>      
        </div>                
    </div>
</x-app-layout>
