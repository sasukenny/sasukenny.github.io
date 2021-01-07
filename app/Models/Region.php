<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    public $table = 'regions';
    protected $primaryKey = 'reg_id';
    public $timestamps = false;

    //Relación de uno a muchos

    public function provincias(){
        return $this->hasMany(Provincia::class, 'prov_id', 'prov_id');
    }
}
