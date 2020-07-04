<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UnitUsaha;
use App\JenisUnitUsaha;
use File;
use Auth;

class UnitUsahaController extends Controller
{

	public $dirGambar = "website/images/usaha/";
    public $namaDefault = "default.jpg";

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

    public function viewUpdateDeskripsi($id){
    	$row = UnitUsaha::findOrFail($id);
    	return view("dashboard.unit_usaha.deskripsi", compact("row"));
    }

    public function updateDeskripsi(Request $req, $id){
    	$this->validate($req, [
        	"deskripsi" => "required",
        ]);

        $row = UnitUsaha::findOrFail($id);
        $row->deskripsi = $req->deskripsi;
        $row->save();

        return redirect()->back()
            ->with("success", "Deskripsi : <b>".$row->nama."</b> berhasil di-update");
    }

    public function viewUpdateGambar($id){
    	$row = UnitUsaha::findOrFail($id);
    	return view("dashboard.unit_usaha.gambar", compact("row"));
    }

    public function updateGambar(Request $req, $id){
    	$row = UnitUsaha::findOrFail($id);
        if($row->gambar != $this->namaDefault){
            File::delete($this->dirGambar.$row->gambar);
        }
    	$folderPath = public_path($this->dirGambar);
        $image_parts = explode(";base64,", $req->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $nama_gambar = uniqid() . '.jpg';
        $file = $folderPath . $nama_gambar;
        file_put_contents($file, $image_base64);

        $row->gambar = $nama_gambar;
        $row->save();

        return response()->json([
        	"status" => true,
        	"message" => "Gambar yang upload berhasil disimpan"
        ]);
    }
}
