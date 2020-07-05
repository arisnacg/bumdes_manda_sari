<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kerjasama extends Model
{
    protected $table = "kerjasama";

    protected $fillable = ["nama"];

    public function program(){
        return $this->hasMany("App\Program", "id_kerjasama");
    }
}