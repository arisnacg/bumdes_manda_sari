<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisUnitUsaha;
use App\UnitUsaha;
use App\KategoriBlog;
use App\Blog;

class DashboardController extends Controller
{
    public function index(){
    	$data_jumlah = [];
    	$data_jumlah["jenis_usaha"] = JenisUnitUsaha::count();
    	$data_jumlah["usaha"] = UnitUsaha::count();
    	$data_jumlah["kategori_blog"] = KategoriBlog::count();
    	$data_jumlah["blog"] = Blog::count();
    	return view("dashboard.index", compact("data_jumlah"));
    }

    public function gantiPassword(){
    	return view("dashboard.ganti_password");
    }
}
