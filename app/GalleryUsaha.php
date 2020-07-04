<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryUsaha extends Model
{
    protected $table = "gallery_usaha";

    protected $fillable = ["gambar", "id_unit_usaha"];
}
