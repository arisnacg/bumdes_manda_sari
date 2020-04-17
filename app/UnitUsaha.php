<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitUsaha extends Model
{
    protected $table = "unit_usaha";

    protected $fillable = ["id_jenis", "nama", "url", "gambar", "deskripsi", "dikunjungi", "id_penulis"];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function jenis(){
    	return $this->belongsTo("App\JenisUnitUsaha", "id_jenis");
    }

    public function penulis(){
    	return $this->belongsTo("App\User", "id_penulis");
    }

    public function convertNamatoUrl(){
    	$this->update(["url" => preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($this->nama)))]);
    }
}
