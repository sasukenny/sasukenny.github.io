<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    public $table = 'citas';
    protected $primaryKey = 'cita_id';
    protected $fillable = ['cita_hor', 'cita_user'];
    public $timestamps = false;

    //Relación uno a uno inversa
    public function user(){
        return $this->belongsTo(User::class, 'cita_user', 'id');
    }

    //Relación uno a muchos inversa
    public function horario(){
        return $this->belongsTo(Distrito::class, 'cita_hor', 'hor_id');
    }
}
