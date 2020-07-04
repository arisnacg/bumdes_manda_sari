<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\Kerjasama;
use Auth;
use File;

class ProgramController extends Controller
{
	
    public $dirGambar = "website/images/program/";
    public $namaDefault = "default.jpg";

    public function index(){
    	$data = Program::with("kerjasama")->withCount("anggota")
    		->orderBy("created_at", "desc")
    		->get();
    	return view("dashboard.program.index", compact("data"));
    }

    public function create(){
    	$kerjasama = Kerjasama::all();
        return view("dashboard.program.create", compact("kerjasama"));
    }

    public function edit($id){
    	$kerjasama = Kerjasama::all();
        $row = Program::findOrFail($id);
        return view("dashboard.program.edit", compact("row", "kerjasama"));
    }

    public function store(Request $req){
        $this->validate($req, [
        	"id_kerjasama" => "required",
            "judul" => "required|string",
            "isi" => "required"
        ]);

        $num = Program::where("judul", $req->judul)->count();
        if($num){
            return redirect()->back()
            ->withInput()
            ->with("error", "Judul <b>".$req->judul."</b> sudah terpakai");
        }

        $fill = $req->all();
        $fill["id_penulis"] = Auth::user()->id;

        $row = Program::create($fill);
        $row->convertJudulToUrl();
        return redirect(route("program.index"))
            ->with("success", "Program : <b>".$row->judul."</b> berhasil diterbitkan");
    }

    public function update(Request $req, $id){
        $this->validate($req, [
        	"id_kerjasama" => "required",
            "judul" => "required|string",
            "isi" => "required"
        ]);

        $num = Program::where("judul", $req->judul)
        	->where("id", "!=", $id)
        	->count();
        if($num){
            return redirect()->back()
            ->withInput()
            ->with("error", "Judul <b>".$req->judul."</b> sudah terpakai");
        }

        $fill = $req->all();
        $row = Program::findOrFail($id);
        $judul_diganti = ($row->judul == $req->judul)? false : true;
        $row->update($fill);
        if($judul_diganti)
            $row->convertJudulToUrl();
        return redirect()->back()
            ->with("success", "Program : <b>".$row->judul."</b> berhasil di-update");
    }

    public function destroy($id){
        $row = Program::find($id);
        $nama = $row->nama;
        File::delete($this->dirGambar.$row->gambar);
        $row->delete();
        return redirect(route("program.index"))
            ->with("success", "Program : <b>".$nama."</b> berhasil dihapus");
    }

    public function viewUpdateDeskripsi($id){
    	$row = Program::findOrFail($id);
    	return view("dashboard.program.deskripsi", compact("row"));
    }

    public function updateDeskripsi(Request $req, $id){
    	$this->validate($req, [
        	"deskripsi" => "required",
        ]);

        $row = Program::findOrFail($id);
        $row->deskripsi = $req->deskripsi;
        $row->save();

        return redirect()->back()
            ->with("success", "Deskripsi : <b>".$row->nama."</b> berhasil di-update");
    }

    public function viewUpdateGambar($id){
    	$row = Program::findOrFail($id);
    	return view("dashboard.program.gambar", compact("row"));
    }

    public function updateGambar(Request $req, $id){
    	$row = Program::findOrFail($id);
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
