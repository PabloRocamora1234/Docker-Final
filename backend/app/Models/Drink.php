<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;

    protected $table = 'drinks';

    protected $fillable = [
        'name',
        'price',
        'shop_id',
    ];

    /**
     * Relación N:1 con Shop
     */
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
