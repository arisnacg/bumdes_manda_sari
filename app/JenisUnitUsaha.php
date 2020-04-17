<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisUnitUsaha extends Model
{
    protected $table = "jenis_unit_usaha";

    protected $fillable = ["nama"];

    public function unit_usaha(){
        return $this->hasMany("App\UnitUsaha", "id_jenis");
    }
}
