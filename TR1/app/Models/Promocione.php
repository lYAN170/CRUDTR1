<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocione extends Model
{
    use HasFactory;
    
    protected $table = 'promociones';
    
    protected $primaryKey = 'nro_promocion';
    
    public $incrementing = false;
    
    protected $fillable = ['nro_promocion', 'tipo_viaje', 'costo'];
}
