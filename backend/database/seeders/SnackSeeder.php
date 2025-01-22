<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Snack;

class SnackSeeder extends Seeder
{
    /**
     * Ejecuta el seeder.
     *
     * @return void
     */
    public function run()
    {
        Snack::create(['name' => 'Chips', 'quantity' => 50, 'price' => 1.50]);
        Snack::create(['name' => 'Cookies', 'quantity' => 30, 'price' => 2.00]);
        Snack::create(['name' => 'Candy', 'quantity' => 100, 'price' => 0.75]);
    }
}