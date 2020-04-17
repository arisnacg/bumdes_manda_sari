<?php

namespace App\Http\Controllers;

use App\KategoriBlog;
use Illuminate\Http\Request;

class KategoriBlogController extends Controller
{
    public function index(){
        $data = KategoriBlog::all();
        return view("dashboard.kategori_blog.index", compact("data"));
    }

    public function create(){
        return view("dashboard.kategori_blog.create");
    }

    public function edit($id){
        $row = KategoriBlog::findOrFail($id);
        return view("dashboard.kategori_blog.edit", compact("row"));
    }

    public function store(Request $req){
        $this->validate($req, [
            "nama" => "required|string",
        ]);

        $num = KategoriBlog::where("nama", $req->nama)->count();
        if($num){
            return redirect()->back()
            ->withInput()
            ->with("error", "Nama <b>".$req->nama."</b> sudah terpakai");
        }
        $fill = $req->all();

        $row = KategoriBlog::create($fill);
        return redirect(route("kategori_blog.index"))
            ->with("success", "Kategori : <b>".$row->nama."</b> berhasil ditambahkan");
    }

    public function update(Request $req, $id){
        $this->validate($req, [
            "nama" => "required|string",
        ]);

        $num = KategoriBlog::where("nama", $req->nama)->count();
        if($num){
            return redirect()->back()
            ->withInput()
            ->with("error", "Nama <b>".$req->nama."</b> sudah terpakai");
        }
        $fill = $req->all();

        $row = KategoriBlog::find($id);
        $row->update($fill);
        return redirect(route("kategori_blog.index"))
            ->with("success", "Kategori : <b>".$row->nama."</b> berhasil di-update");
    }

    public function destroy($id){
        $row = KategoriBlog::findOrFail($id);
        UnitUsaha::where("id_jenis", $id)->delete();
        $nama = $row->nama;
        $row->delete();
        return redirect(route("kategori_blog.index"))
            ->with("success", "Kategori : <b>".$nama."</b> berhasil dihapus");
    }
}
