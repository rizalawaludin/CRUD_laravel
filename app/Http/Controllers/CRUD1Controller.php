<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;

class CRUD1Controller extends Controller
{
	public function index(){
    	$a = blog::all();
    	return view('index',['a' => $a]);
    }
    public function tambah(Request $request){
    	blog::create($request->all());
    	return redirect('/');
    }
    public function hapus($id){
    	$a = blog::find($id)->delete();
    	return redirect('/');
    }
    public function edit($id){
    	$a = blog::find($id);
    	return view('/edit',['a' => $a]);
    }
    public function update(Request $request,$id){
        $a = blog::find($id);
        $a->update($request->all());
        $a->save();
        return redirect('/');
    }
}
