<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
class CRUD2Controller extends Controller
{
    public function index(){
    	$a = blog::all();
    	return view('halaman.halaman',['a' => $a]);
    }
    public function konten($id){
    	$a = blog::find($id);
    	return view('halaman.halaman',['a' => $a]);
    }
}
