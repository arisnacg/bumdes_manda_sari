<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;

class AnggotaController extends Controller
{
    public function index(){
    	$data = Anggota::all();
    	return view("dashboard.anggota.index", compact("data"));
    }

    public function create(){
    	return view("dashboard.anggota.create");
    }

    public function edit($id){
        $row = Anggota::findOrFail($id);
        return view("dashboard.anggota.edit", compact("row"));
    }

    public function store(Request $req){
        $this->validate($req, [
            "nama" => "required|string",
            "jabatan" => "required",
            "no_hp" => "required",
            "pendidikan" => "required",
        ]);
        $fill = $req->all();

        $row = Anggota::create($fill);
        return redirect(route("anggota.index"))
            ->with("success", "Anggota : <b>".$row->nama."</b> berhasil di-tambah");
    }

    public function update(Request $req, $id){
        $this->validate($req, [
            "nama" => "required|string",
            "jabatan" => "required",
            "no_hp" => "required",
            "pendidikan" => "required",
        ]);

        $fill = $req->all();

        $row = Anggota::find($id);
        $row->update($fill);
        return redirect(route("anggota.index"))
            ->with("success", "Anggota : <b>".$row->nama."</b> berhasil di-update");
    }

    public function destroy($id){
        $row = Anggota::findOrFail($id);
        $nama = $row->nama;
        $row->delete();
        return redirect()->back()
            ->with("success", "Anggota : <b>".$nama."</b> berhasil dihapus");
    }
}
