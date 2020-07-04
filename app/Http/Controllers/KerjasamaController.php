<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kerjasama;
use App\Program;
use App\AnggotaProgram;

class KerjasamaController extends Controller
{
    public function index(){
    	$data = Kerjasama::all();
    	return view("dashboard.kerjasama.index", compact("data"));
    }

    public function create(){
        return view("dashboard.kerjasama.create");
    }

    public function edit($id){
        $row = Kerjasama::findOrFail($id);
        return view("dashboard.kerjasama.edit", compact("row"));
    }

    public function store(Request $req){
        $this->validate($req, [
            "nama" => "required|string",
        ]);

        $num = Kerjasama::where("nama", $req->nama)->count();
        if($num){
            return redirect()->back()
            ->withInput()
            ->with("error", "Nama <b>".$req->nama."</b> sudah terpakai");
        }
        $fill = $req->all();

        $row = Kerjasama::create($fill);
        return redirect(route("kerjasama.index"))
            ->with("success", "Kerja Sama : <b>".$row->nama."</b> berhasil ditambahkan");
    }

    public function update(Request $req, $id){
        $this->validate($req, [
            "nama" => "required|string",
        ]);

        $num = Kerjasama::where("nama", $req->nama)->where("id","!=", $id)->count();
        if($num){
            return redirect()->back()
            ->withInput()
            ->with("error", "Nama <b>".$req->nama."</b> sudah terpakai");
        }
        $fill = $req->all();

        $row = Kerjasama::find($id);
        $row->update($fill);
        return redirect(route("kerjasama.index"))
            ->with("success", "Kerja Sama : <b>".$row->nama."</b> berhasil di-update");
    }

    public function destroy($id){
        $row = Kerjasama::findOrFail($id);
        $program = Program::where("id_kerjasama", $id)->get();
        foreach($program as $e){
        	AnggotaProgram::where("id_program", $e->id)->delete();
        }
        Program::where("id_kerjasama", $id)->delete();
        $nama = $row->nama;
        $row->delete();
        return redirect(route("kerjasama.index"))
            ->with("success", "Kerja Sama : <b>".$nama."</b> berhasil dihapus");
    }
}


