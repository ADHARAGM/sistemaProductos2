<x-app-layout>
    <div class="recuadro">        
          <form class="col-sm-10" method="post" action="{{route('producto.edit',$datos['persona']->id_producto) }}">@csrf
            <div class="col-sm-12 lineal">
                <div class="col-md-4">
                    <label  class="form-label">Nombre del producto</label>
                    <input readonly type="text" class="block mt-1 w-full form-control" id="nombreProducto" name="nombreProducto" placeholder="Nombre" value="{{$datos['persona']->nombreProducto}}">
                </div>
                <div class="col-md-4">
                    <label  class="form-label">Descripción</label>
                    <input readonly type="text" class="block mt-1 w-full form-control" id="descrip" name="descrip" placeholder="-Descripción" value="{{$datos['persona']->descrip}}">
                </div>
                 <div class="col-md-3">
                    <label  class="form-label">Categoria</label>
                    <select disabled id="id_categoria"  name="id_categoria" class=" block mt-1 w-full form-control" value="{{$datos['persona']->id_categoria}}">
                        @foreach($datos['categorias'] as $key)
                            <option value="{{$key['id_categoria']}}" @if( $datos['persona']->id_categoria == $key['id_categoria']) selected @endif>
                                {{$key['categoria']}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-12 lineal">           
                 <div class="col-md-4">
                    <label  class="form-label">Sucursal</label>
                    <select disabled id="id_sucursal"  name="id_sucursal" class=" block mt-1 w-full form-control" value="{{$datos['persona']->id_sucursal}}">
                        @foreach($datos['sucursales'] as $key)
                            <option value="{{$key['id_sucursal']}}" @if( $datos['persona']->id_sucursal == $key['id_sucursal']) selected @endif >
                                {{$key['nombreSucursal']}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label  class="form-label">Precio</label>
                    <input readonly type="number" class="block mt-1 w-full form-control" id="precio" name="precio" placeholder="Precio" value="{{$datos['persona']->precio}}">
                </div>
                <div class="col-md-3">
                    <label  class="form-label">Fecha de compra</label>
                    <input readonly type="date" class="block mt-1 w-full form-control" id="fecha_compra" name="fecha_compra" placeholder="fecha" value="{{$datos['persona']->fecha_compra}}">
                </div>
            </div>
             <div class="col-sm-12 lineal">           
                 <div class="col-md-4">
                    <label  class="form-label">Estado</label>
                    <select  id="estado"  name="estado" class=" block mt-1 w-full form-control" value="{{$datos['persona']->id_sucursal}}">                  
                            <option value="1">
                                Habilitado
                            </option>  
                            <option value="2">
                               Deshabilitado
                            </option>                     
                    </select>
                </div>
                <div class="col-md-7">
                    <label  class="form-label">Comentario</label>
                    <input  type="text" class="block mt-1 w-full form-control" id="comentario" name="comentario" placeholder="Comentario" value="{{$datos['persona']->Comentario}}">
                </div>
                
            </div>
            <div class="col-sm-12 align-right">            
                <div class="col-sm-2 ">
                     <button type="submit" class="btn btn-primary">Editar</a>
                </div>
            </div>
          </form>      
        </div>                
    </div>
</x-app-layout>
