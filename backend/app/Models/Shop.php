<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $table = 'shops';

    protected $fillable = [
        'name',
        'description',
        'address',
        'phone',
        'email',
    ];

    /**
     * Relación 1:N con Drink
     */
    public function drinks()
    {
        return $this->hasMany(Drink::class);
    }

    /**
     * Obtener tienda por ID
     */
    public static function getById($id)
    {
        return self::find($id);
    }
}