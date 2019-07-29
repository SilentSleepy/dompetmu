<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UangMasuk;
use App\Master;
use App\Kategori;

class UangMasukController extends Controller
{
    public function index()
    {
    	$uang_masuk = UangMasuk::All();
    	return view('uang_masuk', ['uang_masuk' => $uang_masuk]);
    }

    public function tambah()
    {
    	return view('uang_masuk_tambah');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'master' => 'required',
            'tanggal' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'nilai' => 'required'
    	]);
 
        UangMasuk::create([
    		'master' => $request->master,
            'tanggal' => $request->tanggal,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'nilai' => $request->nilai
    	]);
 
    	return redirect('/uang-masuk');
    }

}
