<?php

namespace App\Http\Controllers;

use App\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index(){
        return Status::all();
    }
    public function create(Request $request){
        $status = new Status();

        $status->status_karyawan = $request->status_karyawan;
        $status->masa_kerja = $request->masa_kerja;
        $status->save();

        return "Data Berhasil di Input";
    }

    public function update(Request $request,$id){
        
        $status1 = $request->status_karyawan;
        $status2 = $request->masa_kerja;

        $status3 = Status::find($id);

        $status3->status_karyawan = $status1;
        $status3->masa_kerja = $status2;
        $status3->save();

        return "Data Berhasil di Update";
    }

    public function delete($id){
        $status3 = Status::find($id);
        $status3->delete();

        return "Data Berhasil dihapus";
    }
}
