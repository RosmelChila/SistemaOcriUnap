<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coverage extends Model
{
    use HasFactory;
    protected $fillable=['name'];
    public function agreements(){
        return $this->hasMany(Agreement::class,'id','coverage_id');
    }
}
