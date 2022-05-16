<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class SessionController extends Controller
{	
	// menampilkan isi session
	public function showSession(Request $request) {
		if($request->session()->has('nama')){
			echo $request->session()->get('nama');
		}else{
			echo 'No data in this session.';
		}
	}
	// membuat session
	public function createSession(Request $request) {
		$request->session()->put('nama','Indra Wibowo');
		echo "Data added to this session.";
	}
	// menghapus session
	public function deleteSession(Request $request) {
		$request->session()->forget('nama');
		echo "Data deleted from session.";
	}
 
}