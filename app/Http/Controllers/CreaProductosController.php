<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use App\Models\Categorias;
use App\Models\Sucursales;
class CreaProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function bandejaProducto(){
        $datos=Productos::paginate(5);
        return view('productosL.bandeja', compact('datos'));
    }
    public function agregarProducto(){
         $datos['categorias']=Categorias::all();
         $datos['sucursales']=Sucursales::all();
         return view('productosL.productos', compact('datos'));
    }
    
    public function createProducto(Request $request)
    {
        $productos=new Productos();
        $productos->nombreProducto=$request->post('nomProducto');
        $productos->descrip=$request->post('descrip');
        $productos->id_categoria=$request->post('id_categoria');
        $productos->id_sucursal=$request->post('id_sucursal');
        $productos->precio=$request->post('precio');
         $productos->fecha_compra=$request->post('fecha');

        $productos->save();
        return redirect()->route("profile.agregarProducto")->with("success","Agregado correctamente");        
    }

    public function editaProducto($id_producto){
        $datos['categorias']=Categorias::all();
        $datos['sucursales']=Sucursales::all();
        $datos['persona']=Productos::where('id_producto', $id_producto)->first();
        return view('productosL.editaProducto', compact('datos'));
    }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $creaProductos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $creaProductos,$id_producto)
    {
         $productos=request()->except(['_token'],'_method');
        Productos::where('id_producto', $id_producto)->update($productos);
        return redirect('bandeja');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CreaProductos $creaProductos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_producto)
    {
        Productos::where('id_producto', $id_producto)->delete();
        
        return redirect('bandeja');
    }
}
