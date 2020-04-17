<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBlog extends Model
{
    protected $table = "kategori_blog";

    protected $fillable = ["nama"];
}
