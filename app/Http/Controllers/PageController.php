<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisUnitUsaha;
use App\UnitUsaha;
use App\Informasi;
use App\Blog;
use App\Anggota;
use App\KategoriBlog;
use DB;
use Share;
use App\Kerjasama;
use App\Program;
use App\AnggotaProgram;

use Illuminate\Support\Facades\Input;

class PageController extends Controller
{
    //halaman utama
    public function index(Request $req){
        $data = $this->dataHalaman();
        $blog_terbaru = Blog::with(["penulis", "kategori"])->orderBy("created_at", "desc")->take(6)->get();
        return view("index", compact("data", "blog_terbaru", "req"));
    }

    //about
    public function about(Request $req){
        $data = $this->dataHalaman();
        $anggota = Anggota::all();
        return view("about", compact("data", "anggota"));
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
        $kategori_blog = null;

        $daftar_blog = Blog::with(["penulis", "kategori"]);
        if($req->id_kategori){
            $daftar_blog->where("id_kategori", $req->id_kategori);
            $kategori_blog = KategoriBlog::find($req->id_kategori);
        }
        if($req->search){
            $daftar_blog->where("judul", "like", "%".$req->search."%");
        }
        if($req->bulan){
            $daftar_blog->whereMonth("created_at", "=", $req->bulan);
        }
        if($req->tahun){
            $daftar_blog->whereYear("created_at", "=", $req->tahun);
        }

        $daftar_blog->orderBy("created_at", "desc");
        $daftar_blog = $daftar_blog->simplePaginate(10);
        $daftar_blog->appends(Input::except('page'));
        return view("daftar_blog", compact("data", "daftar_blog", "req", "kategori_blog"));
    }

    //daftar blog
    public function daftarUsaha(Request $req){
        $data = $this->dataHalaman();
        $jenis_usaha = null;

        $daftar_usaha = UnitUsaha::with(["penulis", "jenis"]);
        if($req->id_jenis){
            $daftar_usaha->where("id_jenis", $req->id_jenis);
            $jenis_usaha = JenisUnitUsaha::find($req->id_jenis);
        }
        if($req->search){
            $daftar_usaha->where("nama", "like", "%".$req->search."%");
        }
        $daftar_usaha->orderBy("created_at", "desc");
        $daftar_usaha = $daftar_usaha->simplePaginate(10);
        $daftar_usaha->appends(Input::except('page'));
        return view("daftar_usaha", compact("data", "daftar_usaha", "req", "jenis_usaha"));
    }

    //unit usaha
    public function unitUsaha(Request $req, $url){
        $data = $this->dataHalaman();
        $unit_usaha = UnitUsaha::with(["jenis", "penulis", "gallery"])->where("url", $url)->first() or abort(404);
        $unit_usaha->update(["dikunjungi" => $unit_usaha->dikunjungi + 1]);
        return view("unit_usaha", compact("unit_usaha", "data"));
    }

    //blog
    public function program(Request $req, $url){
        $data = $this->dataHalaman();
        $program = Program::with(["kerjasama", "penulis", "anggota"])->where("url", $url)->first() or abort(404);
        $program->update(["dikunjungi" => $program->dikunjungi + 1]);
        return view("program", compact("program", "data"));
    }

    //data halaman
    public function dataHalaman(){
        $data = [];
        $data["jenis_unit_usaha"] = JenisUnitUsaha::with("unit_usaha")->get();
        $data["kategori_blog"] = KategoriBlog::all();
        $data["blog_populer"] = Blog::with("kategori")->orderBy("dikunjungi", "desc")->take(3)->get();
        $data["informasi"] = Informasi::first();
        $data["kerjasama"] = Kerjasama::all();
        $data["arsip"] = Blog::selectRaw('year(created_at) year, month(created_at) month, count(*) data')
            ->groupBy('year', 'month')
            ->orderBy('year', 'desc')
            ->take(16)
            ->get();
        return $data;
    }
}
