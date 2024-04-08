<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class CreaProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    /**
     * Show the form for creating a new resource.
     */
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CreaProductos $creaProductos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CreaProductos $creaProductos)
    {
        //
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
    public function destroy(CreaProductos $creaProductos)
    {
        //
    }
}
