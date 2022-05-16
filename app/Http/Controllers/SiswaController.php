<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use Illuminate\Support\Facades\Validator;

class SiswaController extends Controller
{
    public function store(Request $request) {
        $validator=Validator::make($request->$all(),
            [
                'nama_siswa' => 'required',
                'tanggal_lahir' => 'required',
                'gender' => 'required',
                'alamat' => 'required',
                'id_kelas' => 'required'
            ]
        );

        if($validator->fails()){
            return Response()->json($validator->errors());
        }

        $save = Siswa::create ([ 
            'nama_siswa' => $request->nama_siswa,
            'tanggal_lahir' => $request->tanggal_lahir,
            'gender' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'id_kelas' => $request->id_kelas
        ]);

        if($save) {
            return Response()->json(['status'=>1]);
        } else {
            return Response()->json(['status'=>0]);
        }

    }
}
