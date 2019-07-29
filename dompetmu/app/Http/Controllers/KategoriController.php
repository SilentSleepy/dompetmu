<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
    	$kategori = Kategori::all();
    	return view('kategori', ['kategori' => $kategori]);
    }

    public function tambah()
    {
    	return view('kategori_tambah');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nama' => 'required',
            'deskripsi' => 'required'
    	]);
 
        Kategori::create([
    		'nama' => $request->nama,
            'deskripsi' => $request->deskripsi
    	]);
 
    	return redirect('/kategori');
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id);
        return view('kategori_edit', ['kategori' => $kategori]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'deskripsi' => 'required',
            'status' => 'required'
        ]);
    
        $kategori = Kategori::find($id);
        $kategori->nama = $request->nama;
        $kategori->deskripsi = $request->deskripsi;
        $kategori->status = $request->status;
        $kategori->save();
        return redirect('/kategori');
    }

    public function delete($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();
        return redirect('/kategori');
    }
}
