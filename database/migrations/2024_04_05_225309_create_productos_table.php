<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id_producto');
            $table->String('nombreProducto',30);
            $table->String('descrip',100);
            $table->double('precio');
            $table->date('fecha_compra');
            $table->String('estado')->nullable();;
            $table->text('comentario')->nullable();;
            $table->bigInteger('id_categoria')->unsigned()->index();
            $table->foreign('id_categoria')->references('id_categoria')->on('categorias')->onDelete('cascade');

            $table->bigInteger('id_sucursal')->unsigned()->index();
            $table->foreign('id_sucursal')->references('id_sucursal')->on('sucursales')->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
