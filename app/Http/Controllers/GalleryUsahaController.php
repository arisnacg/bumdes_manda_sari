<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GalleryUsaha;
use App\UnitUsaha;
use File;

class GalleryUsahaController extends Controller
{

	public $dirGambar = "website/images/gallery_usaha/";

    public function gallery($id_unit_usaha){
    	$unit_usaha = UnitUsaha::findOrFail($id_unit_usaha);
    	$data = GalleryUsaha::where("id_unit_usaha", $id_unit_usaha)
    		->orderBy("created_at")
    		->get();
    	return view("dashboard.gallery_usaha.index", compact("unit_usaha", "data"));
    }

    public function add($id_unit_usaha){
    	$unit_usaha = UnitUsaha::findOrFail($id_unit_usaha);
        return view("dashboard.gallery_usaha.create", compact("unit_usaha"));
    }

    public function store(Request $req){
        $this->validate($req, [
        	"id_unit_usaha" => "required"
        ]);
        $fill = $req->all();
    	$folderPath = public_path($this->dirGambar);
        $image_parts = explode(";base64,", $req->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $nama_gambar = uniqid() . '.jpg';
        $file = $folderPath . $nama_gambar;
        file_put_contents($file, $image_base64);

        
        $fill["gambar"] = $nama_gambar;

        $row = GalleryUsaha::create($fill);
        return response()->json([
            "status" => true,
            "message" => "Gambar gallery yang upload berhasil disimpan"
        ]);
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
        $row = GalleryUsaha::find($id);
        File::delete($this->dirGambar.$row->gambar);
        $row->delete();
        return redirect()->back()
            ->with("success", "Gambar gallery berhasil dihapus");
    }
}
