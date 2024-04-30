<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Product;
use App\models\Provider;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Crear productos
        $product1 = Product::create([
            'name' => 'Producto 1',
            'description' => 'Descripción del producto 1',
            'brand' => 'marca1',
        ]);
        $product2 = Product::create([
            'name' => 'Producto 2',
            'description' => 'Descripción del producto 2',
            'brand' => 'marca2',
        ]);
        $product3 = Product::create([
            'name' => 'Producto 3',
            'description' => 'Descripción del producto 3',
            'brand' => 'marca3
            ',
        ]);

        // Crear proveedores
        $provider1 = Provider::create([
            'name' => 'Proveedor 1',
            'cif' => 'CIF del proveedor 1',
            'phone' => 'Teléfono del proveedor 1',
            'email' => 'correo@proveedor1.com',
            'password' => bcrypt('contraseña1'),
        ]);
        $provider2 = Provider::create([
            'name' => 'Proveedor 2',
            'cif' => 'CIF del proveedor 2',
            'phone' => 'Teléfono del proveedor 2',
            'email' => 'correo@proveedor2.com',
            'password' => bcrypt('contraseña2'),
        ]);
        $provider3 = Provider::create([
            'name' => 'Proveedor 3',
            'cif' => 'CIF del proveedor 3',
            'phone' => 'Teléfono del proveedor 3',
            'email' => 'correo@proveedor3.com',
            'password' => bcrypt('contraseña3'),
        ]);

        // Relacionar productos y proveedores
        $product1->providers()->attach($provider1->id, ['price' => 10.50, 'stock' => 100]);
        $product2->providers()->attach($provider2->id, ['price' => 20.75, 'stock' => 50]);
        $product3->providers()->attach($provider3->id, ['price' => 15.00, 'stock' => 75]);
    }

}
