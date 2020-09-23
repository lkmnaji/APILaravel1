<?php

namespace App\Http\Controllers;

use App\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index(){
        return Karyawan::all();
    }
    public function create(Request $request){
        $karyawan = new Karyawan();

        $karyawan->nik_karyawan = $request->nik_karyawan;
        $karyawan->nama_karyawan = $request->nama_karyawan;
        $karyawan->alamat_karyawan = $request->alamat_karyawan;
        $karyawan->nomor_telepon = $request->nomor_telepon;
        $karyawan->jabatan = $request->jabatan;
        $karyawan->divisi = $request->divisi;
        $karyawan->status = $request->status;
        $karyawan->save();

        return "Data Berhasil di Input";
    }

    public function update(Request $request,$id){
        
        $karyawan1 = $request->nik_karyawan;
        $karyawan2 = $request->nama_karyawan;
        $karyawan3 = $request->alamat_karyawan;
        $karyawan4 = $request->nomor_telepon;
        $karyawan5 = $request->jabatan;
        $karyawan6 = $request->divisi;
        $karyawan7 = $request->status;

        $karyawan8 = Karyawan::find($id);

        $karyawan8->nik_karyawan = $karyawan1;
        $karyawan8->nama_karyawan = $karyawan2;
        $karyawan8->alamat_karyawan = $karyawan3;
        $karyawan8->nomor_telepon = $karyawan4;
        $karyawan8->jabatan = $karyawan5;
        $karyawan8->divisi = $karyawan6;
        $karyawan8->status = $karyawan7;
        $karyawan8->save();

        return "Data Berhasil di Update";
    }

    public function delete($id){
        $karyawan8 = Karyawan::find($id);
        $karyawan8->delete();

        return "Data Berhasil dihapus";
    }
}
