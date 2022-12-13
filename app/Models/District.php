<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $fillable=['name','province_id'];
    public function agreements(){
        return $this->hasMany(Agreement::class,'id','district_id');
    }
    public function provinces(){
        return $this->belongsTo(Province::class,'province_id','id');
    }
}
