<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kasus extends Model
{
    use HasFactory;
    protected $fillable =['id','positif','sembuh','meninggal','tanggal','rws_id'];
    public $timestamps = true;
    
    public function rw(){
        return $this->belongsTo('App\Models\Rw', 'rws_id');
    }
}
