<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisUnitUsaha;
use App\UnitUsaha;
use App\KategoriBlog;
use App\Blog;
use Hash;
use Auth;

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

    public function updatePassword(Request $req){
        $this->validate($req, [
            "password_lama" => "required",
            "password" => "required|min:6|confirmed"
        ]);

        if(!Hash::check($req->password_lama, Auth::user()->password)){
            return redirect()->back()->with("error", "Password lama Anda salah");
        }
        Auth::user()->update([
            "password" => bcrypt($req->password)
        ]);
        return redirect()->back()->with("success", "Password Anda berhasil diganti");
    }
}
