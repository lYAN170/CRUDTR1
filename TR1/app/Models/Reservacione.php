<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservacione extends Model
{
    use HasFactory;

    protected $table = 'reservaciones';

    protected $primaryKey = 'nro_reservacion';

    public $incrementing = false;

    protected $fillable = [
        'nro_reservacion', 'nro_promocion', 'cliente_dni', 'pago_adelantado',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_dni', 'dni');
    }

    public function promocione()
    {
        return $this->hasOne(Promocione::class, 'nro_promocion');
    }
}
