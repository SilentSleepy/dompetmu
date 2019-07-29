<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';

    protected $fillable = ['nama','deskripsi','status'];

    public function uangMasuk()
    {
    	return $this->belongsToMany('App\UangMasuk');
    }

    public function uangKeluar()
    {
    	return $this->belongsToMany('App\UangKeluar');
    }
}
