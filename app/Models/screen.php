<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class screen extends Model
{
    use HasFactory;
    protected $fillable = [
        'Page_Discrption',
        'Page_Image',
        'color',
        // 'screen_type',
        'Created_by',

    ];
    public function app_profile()
    {
    return $this->belongsTo(app_profile::class,'profile_id');
    }
}
