<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\KategoriBlog;
use File;
use Auth;

class BlogController extends Controller
{
    public $dirGambar = "website/images/blog/";
    public $namaDefault = "default.jpg";

    public function index(){
    	$data = Blog::with("kategori")
    		->orderBy("created_at", "desc")
    		->get();
    	return view("dashboard.blog.index", compact("data"));
    }

    public function create(){
    	$kategori_blog = KategoriBlog::all();
        return view("dashboard.blog.create", compact("kategori_blog"));
    }

    public function edit($id){
    	$kategori_blog = KategoriBlog::all();
        $row = Blog::findOrFail($id);
        return view("dashboard.blog.edit", compact("row", "kategori_blog"));
    }

    public function store(Request $req){
        $this->validate($req, [
        	"id_kategori" => "required",
            "judul" => "required|string",
            "isi" => "required"
        ]);

        $num = Blog::where("judul", $req->judul)->count();
        if($num){
            return redirect()->back()
            ->withInput()
            ->with("error", "Judul <b>".$req->judul."</b> sudah terpakai");
        }

        $fill = $req->all();
        $fill["id_penulis"] = Auth::user()->id;

        $row = Blog::create($fill);
        $row->convertJudulToUrl();
        return redirect(route("blog.index"))
            ->with("success", "Blog : <b>".$row->judul."</b> berhasil diterbitkan");
    }

    public function update(Request $req, $id){
        $this->validate($req, [
        	"id_kategori" => "required",
            "judul" => "required|string",
            "isi" => "required"
        ]);

        $num = Blog::where("judul", $req->judul)
        	->where("id", "!=", $id)
        	->count();
        if($num){
            return redirect()->back()
            ->withInput()
            ->with("error", "Judul <b>".$req->judul."</b> sudah terpakai");
        }

        $fill = $req->all();
        $row = Blog::findOrFail($id);
        $judul_diganti = ($row->judul == $req->judul)? false : true;
        $row->update($fill);
        if($judul_diganti)
            $row->convertJudulToUrl();
        return redirect()->back()
            ->with("success", "Blog : <b>".$row->judul."</b> berhasil di-update");
    }

    public function destroy($id){
        $row = Blog::find($id);
        $nama = $row->judul;
        File::delete($this->dirGambar.$row->gambar);
        $row->delete();
        return redirect(route("blog.index"))
            ->with("success", "Blog : <b>".$nama."</b> berhasil dihapus");
    }

    public function viewUpdateDeskripsi($id){
    	$row = Blog::findOrFail($id);
    	return view("dashboard.blog.deskripsi", compact("row"));
    }

    public function updateDeskripsi(Request $req, $id){
    	$this->validate($req, [
        	"deskripsi" => "required",
        ]);

        $row = Blog::findOrFail($id);
        $row->deskripsi = $req->deskripsi;
        $row->save();

        return redirect()->back()
            ->with("success", "Deskripsi : <b>".$row->nama."</b> berhasil di-update");
    }

    public function viewUpdateGambar($id){
    	$row = Blog::findOrFail($id);
    	return view("dashboard.blog.gambar", compact("row"));
    }

    public function updateGambar(Request $req, $id){
    	$row = Blog::findOrFail($id);
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
