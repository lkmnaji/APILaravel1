<?php

namespace App\Http\Controllers;

use App\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index(){
        return Jabatan::all();
    }
    public function create(Request $request){
        $jabatan = new Jabatan();

        $jabatan->jabatan_karyawan = $request->jabatan_karyawan;
        $jabatan->gaji_karyawan = $request->gaji_karyawan;
        $jabatan->save();

        return "Data Berhasil di Input";
    }

    public function update(Request $request,$id){
        
        $jabatan_karyawan = $request->jabatan_karyawan;
        $gaji_karyawan = $request->gaji_karyawan;

        $jabatan = Jabatan::find($id);

        $jabatan->jabatan_karyawan = $jabatan_karyawan;
        $jabatan->gaji_karyawan = $gaji_karyawan;
        $jabatan->save();

        return "Data Berhasil di Update";
    }

    public function delete($id){
        $jabatan3 = Jabatan::find($id);
        $jabatan3->delete();

        return "Data Berhasil dihapus";
    }
}