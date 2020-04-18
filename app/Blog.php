<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = "blog";

    protected $fillable = [
    	"judul",
    	"url",
    	"id_kategori",
    	"id_penulis",
    	"isi",
    	"gambar",
    	"dikunjungi"
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function kategori(){
        return $this->belongsTo("App\KategoriBlog", "id_kategori");
    }

    public function penulis(){
        return $this->belongsTo("App\User", "id_penulis");
    }

    public function convertJudultoUrl(){
        $this->update(["url" => preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($this->judul)))]);
    }
}
