<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shop;
use App\Models\Drink; // Asegúrate de importar el modelo

class DrinksTableSeeder extends Seeder
{
    public function run()
    {
        $shop = Shop::first(); // Obtén una tienda existente

        Drink::create([
            'name' => 'Coca-Cola',
            'price' => 1.50,
            'shop_id' => $shop->id,
        ]);

        Drink::create([
            'name' => 'Pepsi',
            'price' => 1.40,
            'shop_id' => $shop->id,
        ]);
    }
}