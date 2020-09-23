<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        return Siswa::all();
    }
    public function create(Request $request){
        $siswa = new Siswa();
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->alamat_siswa = $request->alamat_siswa;

        $siswa->save();

        return "data berhasil disimpan";
    }

    public function update(Request $request, $id){
        $nama_siswa = $request->nama_siswa;
        $alamat_siswa = $request->alamat_siswa;

        $siswa = Siswa::find($id);
        $siswa->nama_siswa = $nama_siswa;
        $siswa->alamat_siswa = $alamat_siswa;        
    
        $siswa->save();

        return "data berhasil di update";
    }

    public function delete($id){
        $siswa = Siswa::find($id);
        $siswa->delete();

        return "data berhasil dihapus";
    }
}
