<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsible extends Model
{
    use HasFactory;
    protected $fillable=['name','description'];
    public function agreements(){
        return $this->belongsToMany(Agreement::class);
    }
}
