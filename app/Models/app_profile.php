<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class app_profile extends Model
{
    protected $table = 'app_profiles';
    protected $fillable = [
        'Name',
        'Email',
        'Facebook',
        'Snapchat',
        'Instgram',
        'Twitter',
        'TikTok',
        'Social_Media_Icons_Color',
        'is_active',
        'app_id',
        'Created_by',

    ];
    public function app()
    {
    return $this->belongsTo(app::class);
    }

    public function applaction()
    {
    return $this->belongsTo('App\Models\app');
    }
    public function screen()
    {
    return $this->belongsTo('App\Models\screen');
    }
    public function scopeActive($query){
        return $query -> where('is_active',1);
    }

    public function  scopeSelection($query){

        return $query -> select('Facebook',
        'Snapchat',
        'Instgram',
        'Twitter',
        'TikTok',);
    }


    public function getActive(){
      return   $this -> is_active == 1 ? 'مفعل'  : 'غير مفعل';
    }
}
