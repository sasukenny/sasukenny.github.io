<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    use HasFactory;
    public $table = 'distritos';
    protected $primaryKey = 'dist_id';
    public $timestamps = false;

    //Relación uno a muchos inversa

    public function provincia(){
        return $this->belongsTo(Provincia::class, 'prov_id', 'prov_id');
    }

    //Relación uno a muchos

    public function centros(){
        return $this->hasMany(Centro::class, 'hos_dist', 'dist_id');
    }
}
