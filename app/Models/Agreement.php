<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    use HasFactory;
    protected $fillable=[
        'resolution',
        'title',
        'objetive',
        'approbation',
        'subscription',
        'years',
        'months',
        'days',
        'expiration',
        'sector',
        'organization',
        'location',
        'country_id',
        'region_id',
        'province_id',
        'coverage_id',
        'organization_id',
        'district_id',
        'path',
        'status',
        'notification'
    ];
    public function countries(){
        return $this->belongsTo(Country::class,'country_id','id');
    }
    public function regions(){
        return $this->belongsTo(Region::class,'region_id','id');
    }
    public function provinces(){
        return $this->belongsTo(Province::class,'province_id','id');
    }
    public function districts(){
        return $this->belongsTo(District::class,'district_id','id');
    }
    public function coverages(){
        return $this->belongsTo(Coverage::class,'coverage_id','id');
    }
    public function organizations(){
        return $this->belongsTo(Organization::class,'organization_id','id');
    }
    public function responsibles(){
        return $this->belongsToMany(Responsible::class);
    }
}
