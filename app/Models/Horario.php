<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    public $table = 'horarios';
    protected $primaryKey = 'hor_id';
    public $timestamps = false;

    //Relación uno a muchos inversa
    public function centro(){
        return $this->belongsTo(Centro::class, 'hor_hos', 'hos_id');
    }

    //Relación uno a muchos
    public function citas(){
        return $this->hasMany(Cita::class, 'cita_hor', 'hor_id');
    }
}
