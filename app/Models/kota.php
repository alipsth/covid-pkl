<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kota extends Model
{
    use HasFactory;
    protected $fillable = ['kode_kota','nama_prov','provinsis_id'];
    public $timestamps = true;

    public function provinsi(){
        return $this->belongsTo('App\Models\kota','provinsis_id');
    }
    public function kecamatan(){
        return $this->hasMany('App\Models\kota','kotas_id');
    }
}
