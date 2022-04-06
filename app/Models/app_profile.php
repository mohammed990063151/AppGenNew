<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class app_profile extends Model
{
    // protected $fillable = [
    //     'orgname',
    //     'orgemail',
    //     'ogwhatsapp',
    //     'color',
    //     'pc',
    //     'sc',
    //     'app_id',
    //     'Created_by',

    // ];

    protected $fillable = ['TwitterLink','InstgramLink','FacebookLink','SnapchatLink','TikTokLink','ButtonBarColor','IconsBackgroundColor','Icons_Color','CopyRightStutas'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'CopyRightStutas' => 'boolean',
    ];

    /**
     * The attributes that are translatable.
     *
     * @var array
     */
    public $translatedAttributes = ['name'];



    public function scopeActive($query){
        return $query -> where('CopyRightStutas',1) ;
    }
    public function getActive(){
        return  $this -> CopyRightStutas  == 0 ?  'غير مفعل'   : 'مفعل' ;
    }

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
}
