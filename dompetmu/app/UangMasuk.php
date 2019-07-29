<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UangMasuk extends Model
{
    protected $table = 'uang_masuk';

    protected $fillable = ['master','tanggal','kategori','deskripsi','nilai'];

    public function master()
    {
    	return $this->belongsToMany('App\Master');
    }

    public function kategori()
    {
    	return $this->belongsToMany('App\Kategori');
    }
}
