<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisUnitUsaha;
use App\UnitUsaha;
use App\Informasi;

class PageController extends Controller
{
    //halaman utama
    public function index(Request $req){
        $data = $this->dataHalaman();
        return view("index", compact("data"));
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
        $data["informasi"] = Informasi::first();
        return $data;
    }
}
