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
        'path'
    ];
    public function countries(){
        return $this->belongsTo(Country::class);
    }
    public function regions(){
        return $this->belongsTo(Region::class);
    }
    public function provinces(){
        return $this->belongsTo(Province::class);
    }
    public function districts(){
        return $this->belongsTo(District::class);
    }
    public function coverages(){
        return $this->belongsTo(Coverage::class);
    }
    public function organizations(){
        return $this->belongsTo(Organization::class);
    }
    public function responsibles(){
        return $this->belongsToMany(Responsible::class);
    }
}
