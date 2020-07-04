<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AnggotaProgram;
use App\Program;
use File;

class AnggotaProgramController extends Controller
{

    public $dirGambar = "website/images/anggota_program/";
    public $namaDefault = "default.jpg";

    public function show($id_program){
    	$program = Program::findOrFail($id_program);
    	$data = AnggotaProgram::where("id_program", $id_program)->get();
    	return view("dashboard.anggota_program.index", compact("data", "program"));
    }

    public function add($id_program){
    	$program = Program::findOrFail($id_program);
    	return view("dashboard.anggota_program.create", compact("program"));
    }

    public function edit($id){
        $row = AnggotaProgram::with("program")->findOrFail($id);
        return view("dashboard.anggota_program.edit", compact("row"));
    }

    public function store(Request $req){
        $this->validate($req, [
            "nama" => "required|string",
            "id_program" => "required",
            "umur" => "required",
            "pekerjaan" => "required",
            "alamat" => "required",
            "informasi" => "required|string"
        ]);
        $fill = $req->all();

        $row = AnggotaProgram::create($fill);
        return redirect(route("anggota_program.ganti_foto", ["id" => $row->id]))
            ->with("success", "Data anggota : <b>".$row->nama."</b> disimpan");
    }

    public function update(Request $req, $id){
        $this->validate($req, [
            "nama" => "required|string",
            "id_program" => "required",
            "informasi" => "required|string"
        ]);

        $fill = $req->all();

        $row = AnggotaProgram::find($id);
        $row->update($fill);
        return redirect(route("anggota_program.show", ["id_program" => $req->id_program]))
            ->with("success", "Anggota : <b>".$row->nama."</b> berhasil di-update");
    }

    public function destroy($id){
        $row = AnggotaProgram::findOrFail($id);
        $nama = $row->nama;
        if($row->foto != $this->namaDefault){
            File::delete($this->dirGambar.$row->foto);
        }
        $row->delete();
        return redirect()->back()
            ->with("success", "Anggota : <b>".$nama."</b> berhasil dihapus");
    }

    public function gantiFoto($id){
        $row = AnggotaProgram::findOrFail($id);
        return view("dashboard.anggota_program.ganti_foto", compact("row"));
    }

    public function updateFoto(Request $req, $id){
        $row = AnggotaProgram::findOrFail($id);
        if($row->foto != $this->namaDefault){
            File::delete($this->dirGambar.$row->foto);
        }
        $folderPath = public_path($this->dirGambar);
        $image_parts = explode(";base64,", $req->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $nama_gambar = uniqid() . '.jpg';
        $file = $folderPath . $nama_gambar;
        file_put_contents($file, $image_base64);

        $row->foto = $nama_gambar;
        $row->save();

        return response()->json([
            "status" => true,
            "message" => "Foto profil yang berhasil diganti"
        ]);
    } 
}
