<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function StatusWithSpan(){
        if($this->status){
            return ' <span class="badge bg-success whait-text">active</span>';
        } else {
            return ' <span class="badge bg-warning whait-text">in active</span>';
        }
    }

    public function Features(){
        return $this->hasMany(PackageFeature::class);
    }
    public function Details(){
        return $this->hasMany(packageDetails::class);
    }

    public function Subscription(){
        return $this->hasMany(Subscription::class);
    }

    // public hasFeture($id){
    //     $Feture = Fetur
    // }
    public function Features2(){
        // return $this->hasManyThrough(
        //     Feature::class,
        //     PackageFeature::class,
        //     'feature_id', // Foreign key on the environments table...
        //     'package_id', // Foreign key on the deployments table...
        //     'id', // Local key on the projects table...
        //     'id' // Local key on the environments table...
        // );
    }

}
