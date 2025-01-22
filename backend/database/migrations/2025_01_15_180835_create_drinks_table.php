<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrinksTable extends Migration
{
    public function up()
    {
        Schema::create('drinks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 8, 2);
            $table->foreignId('shop_id') // Relación con la tabla shops
                  ->nullable() // Permitir valores nulos en caso de eliminación
                  ->constrained('shops') // Hace referencia a la tabla shops
                  ->onUpdate('cascade') // Actualización en cascada
                  ->onDelete('set null'); // Eliminar asignación si la tienda se elimina
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('drinks');
    }
}