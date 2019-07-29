<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    protected $table = 'master';

    protected $fillable = ['nama','referensi','deskripsi','saldo','status'];

    public function uangMasuk()
    {
    	return $this->belongsToMany('App\UangMasuk');
    }

    public function uangKeluar()
    {
    	return $this->belongsToMany('App\UangKeluar');
    }    
}
