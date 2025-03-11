<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = ['id_user', 'id_viaje', 'date_reserve', 'num_persons', 'total_price'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function viaje()
    {
        return $this->belongsTo(Viaje::class, 'id_viaje');
    }
}

