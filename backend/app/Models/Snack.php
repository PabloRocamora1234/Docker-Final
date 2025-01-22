<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Snack extends Model
{
    use HasFactory;

    /**
     * La tabla asociada al modelo.
     *
     * @var string
     */
    protected $table = 'snacks';

    /**
     * Los atributos que se pueden asignar masivamente.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'quantity',
        'price',
    ];

    /**
     * Los atributos que deberían ser tratados como tipos específicos.
     *
     * @var array
     */
    protected $casts = [
        'price' => 'float',
        'quantity' => 'integer',
    ];
}
