<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;
    public $table = 'provincias';
    protected $primaryKey = 'prov_id';
    public $timestamps = false;

    //Relación uno a muchos inversa

    public function region(){
        return $this->belongsTo(Region::class, 'reg_id', 'reg_id')->withDefault([
            'reg_id' => 0,
            'reg_name' => '-'
        ]);;
    }

    //Relación uno a muchos

    public function distritos(){
        return $this->hasMany(Distrito::class, 'dist_id', 'dist_id');
    }
}
