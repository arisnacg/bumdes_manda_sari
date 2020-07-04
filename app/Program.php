<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = "program";

    protected $fillable = [
    	"judul",
    	"url",
    	"id_kerjasama",
    	"id_penulis",
    	"isi",
    	"gambar",
    	"dikunjungi"
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function kerjasama(){
        return $this->belongsTo("App\Kerjasama", "id_kerjasama");
    }

    public function penulis(){
        return $this->belongsTo("App\User", "id_penulis");
    }

    public function anggota(){
        return $this->hasMany("App\AnggotaProgram", "id_program");
    }

    public function convertJudultoUrl(){
        $this->update(["url" => preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($this->judul)))]);
    }
}
