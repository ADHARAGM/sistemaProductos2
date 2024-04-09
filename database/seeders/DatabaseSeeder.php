<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categorias;
use App\Models\Sucursales;
use App\Models\Perfiles;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         $categoria0= new Categorias();
        $categoria0->categoria="ELECTRÓNICA";
        $categoria0->save();
        $categoria1=new Categorias();
        $categoria1->categoria="LINEA BLANCA";
        $categoria1->save();
        $categoria2=new Categorias();
        $categoria2->categoria="DEPORTES";
        $categoria2->save();
        $categoria3=new Categorias();
        $categoria3->categoria="ALIMENTOS";
        $categoria3->save();
        $categoria4=new Categorias();
        $categoria4->categoria="JARDÍN";
        $categoria4->save();

        $sucursal0=new Sucursales();
        $sucursal0->nombreSucursal="CUERNAVACA";
        $sucursal0->save();
        $sucursal1=new Sucursales();
        $sucursal1->nombreSucursal="YAUTEPEC";
        $sucursal1->save();
        $sucursal2=new Sucursales();
        $sucursal2->nombreSucursal="CUAUTLA";
        $sucursal2->save();
        $sucursal3=new Sucursales();
        $sucursal3->nombreSucursal="ACAPULCO";
        $sucursal3->save();

        $perfil0=new Perfiles();
        $perfil0->perfil="ADMINISTRADOR";
        $perfil0->save();
        $perfil1=new Perfiles();
        $perfil1->perfil="CAPTURISTA";
        $perfil1->save();


    }
}
