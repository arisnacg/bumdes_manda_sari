<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
    	$data = UnitUsaha::with("jenis")
    		->orderBy("created_at", "desc")
    		->get();
    	return view("dashboard.unit_usaha.index", compact("data"));
    }

    public function create(){
    	$jenis_unit_usaha = JenisUnitUsaha::all();
        return view("dashboard.unit_usaha.create", compact("jenis_unit_usaha"));
    }

    public function edit($id){
    	$jenis_unit_usaha = JenisUnitUsaha::all();
        $row = UnitUsaha::findOrFail($id);
        return view("dashboard.unit_usaha.edit", compact("row", "jenis_unit_usaha"));
    }

    public function store(Request $req){
        $this->validate($req, [
        	"id_jenis" => "required",
            "nama" => "required|string",
        ]);
        $fill = $req->all();
        $fill["id_penulis"] = Auth::user()->id;

        $row = UnitUsaha::create($fill);
        $row->convertNamaToUrl();
        return redirect(route("unit_usaha.index"))
            ->with("success", "Unit Usaha : <b>".$row->nama."</b> berhasil ditambahkan");
    }

    public function update(Request $req, $id){
        $this->validate($req, [
        	"id_jenis" => "required",
            "nama" => "required|string",
        ]);
        $fill = $req->all();
        $row = UnitUsaha::findOrFail($id);
        $nama_diganti = ($row->nama == $req->nama)? false : true;
        $row->update($fill);
        if($nama_diganti)
            $row->convertNamaToUrl();
        return redirect(route("unit_usaha.index"))
            ->with("success", "Unit Usaha : <b>".$row->nama."</b> berhasil di-update");
    }

    public function destroy($id){
        $row = UnitUsaha::find($id);
        $nama = $row->nama;
        File::delete($this->dirGambar.$row->gambar);
        $row->delete();
        return redirect(route("unit_usaha.index"))
            ->with("success", "Unit Usaha : <b>".$nama."</b> berhasil dihapus");
    }
}
