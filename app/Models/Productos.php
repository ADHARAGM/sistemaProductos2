<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $fillable=[
        'id_producto',
        'nombreProducto',
        'descrip',
        'precio',
        'fecha_compra',
        'estado',
        'comentario',
        'id_categoria',
        'id_sucursal'
    ];

    public function sucursales(){
        return $this->hasOne(Sucursales::class, 'id_sucursal', 'id_sucursal');
    }

    public function categorias(){
        return $this->hasOne(Categorias::class,'id_categoria', 'id_categoria');
    }
}
