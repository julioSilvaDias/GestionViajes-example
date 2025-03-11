<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $fillable = ['id_reserva', 'date_pay', 'amount', 'payment_method'];

    public function reserva()
    {
        return $this->belongsTo(Reserva::class, 'id_reserva');
    }
}

