<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applction_Building extends Model
{
    use HasFactory;
    protected $table = 'Applction_Building';
    protected $fillable = [
        'id_Applction',
        'id_prfile',
        'APK',

    ];



    public function app(){
        return $this->hasOne(app::class);
    }



    public function AppProfile(){
        return $this->hasOne(app_profile::class);
    }

}
