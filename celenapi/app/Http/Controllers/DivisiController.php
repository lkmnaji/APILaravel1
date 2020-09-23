<?php

namespace App\Http\Controllers;

use App\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function index(){
        return Divisi::all();
    }
    public function create(Request $request){
        $divisi = new Divisi();

        $divisi->nama_divisi = $request->nama_divisi;
        $divisi->lokasi_divisi = $request->lokasi_divisi;
        $divisi->save();

        return "Data Berhasil di Input";
    }

    public function update(Request $request, $id){
        
        $nama_divisi = $request->nama_divisi;
        $lokasi_divisi = $request->lokasi_divisi;

        $divisi = Divisi::find($id);

        $divisi->nama_divisi = $nama_divisi;
        $divisi->lokasi_divisi = $lokasi_divisi;
        
        $divisi->save();

        return "Data Berhasil di Update";
    }

    public function delete($id){
        $divisi3 = Divisi::find($id);
        $divisi3->delete();

        return "Data Berhasil dihapus";
    }
}
