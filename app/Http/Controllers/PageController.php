<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisUnitUsaha;
use App\UnitUsaha;
use App\Informasi;
use App\Blog;
use App\KategoriBlog;

use Illuminate\Support\Facades\Input;

class PageController extends Controller
{
    //halaman utama
    public function index(Request $req){
        $data = $this->dataHalaman();
        return view("index", compact("data"));
    }

    //blog
    public function blog(Request $req, $url){
        $data = $this->dataHalaman();
        $blog = Blog::with(["kategori", "penulis"])->where("url", $url)->first() or abort(404);
        $blog->update(["dikunjungi" => $blog->dikunjungi + 1]);
        return view("blog", compact("blog", "data"));
    }

    //daftar blog
    public function daftarBlog(Request $req){
        $data = $this->dataHalaman();

        $daftar_blog = Blog::with(["penulis", "kategori"]);
        if($req->id_kategori){
            $daftar_blog->where("id_kategori", $req->id_kategori);
        }
        if($req->search){
            $daftar_blog->where("judul", "like", "%".$req->search."%");
        }
        $daftar_blog->orderBy("created_at", "desc");
        $daftar_blog = $daftar_blog->simplePaginate(10);
        $daftar_blog->appends(Input::except('page'));
        return view("daftar_blog", compact("data", "daftar_blog", "req"));
    }

    //unit usaha
    public function unitUsaha(Request $req, $url){
        $data = $this->dataHalaman();
        $unit_usaha = UnitUsaha::with(["jenis", "penulis"])->where("url", $url)->first() or abort(404);
        $unit_usaha->update(["dikunjungi" => $unit_usaha->dikunjungi + 1]);
        return view("unit_usaha", compact("unit_usaha", "data"));
    }

    //data halaman
    public function dataHalaman(){
        $data = [];
        $data["jenis_unit_usaha"] = JenisUnitUsaha::with("unit_usaha")->get();
        $data["kategori_blog"] = KategoriBlog::all();
        $data["blog_populer"] = Blog::with("kategori")->orderBy("dikunjungi", "desc")->take(3)->get();
        $data["informasi"] = Informasi::first();
        return $data;
    }
}
