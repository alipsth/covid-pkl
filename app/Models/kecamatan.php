<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kecamatan extends Model
{
    use HasFactory;
    protected $fillable = ['nama_kec','kelurahan_id'];
    public $timestamps = true;

    public function kecamatan(){
        return $this->belongsTo('App\Models\kecamatan','kecamatans_id');
    }
    public function kelurahan(){
        return $this->hasMany('App\Models\kecamatan','kelurahans_id');
    }
}
