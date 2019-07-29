<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Master;

class MasterController extends Controller
{
    public function index()
    {
    	$master = Master::all();
    	return view('master', ['master' => $master]);
    }

    public function tambah()
    {
    	return view('master_tambah');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nama' => 'required',
            'referensi' => 'required',
            'deskripsi' => 'required'
    	]);
 
        Master::create([
    		'nama' => $request->nama,
            'referensi' => $request->referensi,
            'deskripsi' => $request->deskripsi
    	]);
 
    	return redirect('/master');
    }

    public function edit($id)
    {
        $master = Master::find($id);
        return view('master_edit', ['master' => $master]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'referensi' => 'required',
            'deskripsi' => 'required',
            'status' => 'required'
        ]);
    
        $master = Master::find($id);
        $master->nama = $request->nama;
        $master->referensi = $request->referensi;
        $master->deskripsi = $request->deskripsi;
        $master->status = $request->status;
        $master->save();
        return redirect('/master');
    }

    public function delete($id)
    {
        $master = Master::find($id);
        $master->delete();
        return redirect('/master');
    }
}
