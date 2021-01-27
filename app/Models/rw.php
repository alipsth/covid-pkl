<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rw extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_rw','kelurahan_id'];
    public $timestamps = true;

    public function kelurahan(){
        return $this->belongsTo('App\Models\kelurahan','kelurahans_id');
    }
    public function rw(){
        return $this->hasMany('App\Models\rw','rws_id');
    }
}
