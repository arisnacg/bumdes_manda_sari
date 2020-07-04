<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnggotaProgram extends Model
{
    protected $table = "anggota_program";

    protected $fillable = [
	    "id_program",
		"nama",
		"umur",
		"pekerjaan",
		"alamat",
		"informasi",
		"foto"
	 ];

    public function program(){
        return $this->belongsTo("App\Program", "id_program");
    }
}
