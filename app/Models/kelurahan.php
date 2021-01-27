<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelurahan extends Model
{
    use HasFactory;
    protected $fillable = ['nama_kec','kelurahan_id'];
    public $timestamps = true;

    public function kelurahan(){
        return $this->belongsTo('App\Models\kelurahan','kelurahans_id');
    }
    public function rw(){
        return $this->hasMany('App\Models\kelurahan','rws_id');
    }
}
