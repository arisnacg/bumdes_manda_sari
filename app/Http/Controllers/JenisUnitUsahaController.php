<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisUnitUsaha;
use App\UnitUsaha;

class JenisUnitUsahaController extends Controller
{
    public function index(){
    	$data = JenisUnitUsaha::all();
    	return view("dashboard.jenis_unit_usaha.index", compact("data"));
    }

    public function create(){
        return view("dashboard.jenis_unit_usaha.create");
    }

    public function edit($id){
        $row = JenisUnitUsaha::findOrFail($id);
        return view("dashboard.jenis_unit_usaha.edit", compact("row"));
    }

    public function store(Request $req){
        $this->validate($req, [
            "nama" => "required|string",
        ]);

        $num = JenisUnitUsaha::where("nama", $req->nama)->count();
        if($num){
            return redirect()->back()
            ->withInput()
            ->with("error", "Nama <b>".$req->nama."</b> sudah terpakai");
        }
        $fill = $req->all();

        $row = JenisUnitUsaha::create($fill);
        return redirect(route("jenis_unit_usaha.index"))
            ->with("success", "Jenis Usaha : <b>".$row->nama."</b> berhasil ditambahkan");
    }

    public function update(Request $req, $id){
        $this->validate($req, [
            "nama" => "required|string",
        ]);

        $num = JenisUnitUsaha::where("nama", $req->nama)->count();
        if($num){
            return redirect()->back()
            ->withInput()
            ->with("error", "Nama <b>".$req->nama."</b> sudah terpakai");
        }
        $fill = $req->all();

        $row = JenisUnitUsaha::find($id);
        $row->update($fill);
        return redirect(route("jenis_unit_usaha.index"))
            ->with("success", "Jenis Usaha : <b>".$row->nama."</b> berhasil di-update");
    }

    public function destroy($id){
        $row = JenisUnitUsaha::findOrFail($id);
        UnitUsaha::where("id_jenis", $id)->delete();
        $nama = $row->nama;
        $row->delete();
        return redirect(route("jenis_unit_usaha.index"))
            ->with("success", "Jenis Usaha : <b>".$nama."</b> berhasil dihapus");
    }
}
