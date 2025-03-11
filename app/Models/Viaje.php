<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'id_destino', 'date_start', 'date_end', 'price', 'disponibility'];

    public function destino()
    {
        return $this->belongsTo(Destino::class, 'id_destino');
    }
}

