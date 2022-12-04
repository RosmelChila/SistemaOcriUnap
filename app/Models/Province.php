<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    protected $fillable=['name'];
    public function agreements(){
        return $this->hasMany(Agreement::class);
    }
    public function regions(){
        return $this->belongsTo(Region::class);
    }
    public function districts(){
        return $this->hasMany(District::class);
    }
}
