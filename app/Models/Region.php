<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $fillable=['name','country_id'];
    public function agreements(){
        return $this->hasMany(Agreement::class,'id','region_id');
    }
    public function countries(){
        return $this->belongsTo(Country::class,'country_id','id');
    }
    public function provinces(){
        return $this->hasMany(Province::class,'id','region_id');
    }
}
