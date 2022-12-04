<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $fillable=['name'];
    public function agreements(){
        return $this->hasMany(Agreement::class);
    }
    public function countries(){
        return $this->belongsTo(Country::class);
    }
    public function provinces(){
        return $this->hasMany(Province::class);
    }
}
