<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    protected $fillable=['name'];
    public function agreements(){
        return $this->hasMany(Agreement::class,'id','province_id');
    }
    public function regions(){
        return $this->belongsTo(Region::class,'region_id','id');
    }
    public function districts(){
        return $this->hasMany(District::class,'id','province_id');
    }
}
