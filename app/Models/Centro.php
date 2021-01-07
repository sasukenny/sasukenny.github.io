<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    use HasFactory;
    public $table = 'centrosdesalud';
    protected $primaryKey = 'hos_id';
    public $timestamps = false;

    //Relación uno a muchos inversa
    public function distrito(){
        return $this->belongsTo(Distrito::class, 'hos_dist', 'dist_id');
    }
    
    //Relación uno a muchos
    public function horarios(){
        return $this->hasMany(Distrito::class, 'hor_hos', 'hos_id');
    }
}
