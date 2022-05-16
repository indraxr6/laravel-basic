<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;



class KelasController extends Controller
{
    public function store(Request $request) {
        $validator=Validator::make($request->$all(),
            [
                'nama_kelas' => 'required'
            ]
        );

        if($validator->fails()){
            return Response()->json($validator->errors());
        }

        $save = Kelas::create ([ 
            'nama_kelas' => $request->nama_kelas
        ]);

        if($save) {
            return Response()->json(['status'=>1]);
        } else {
            return Response()->json(['status'=>0]);
        }

    }
}

