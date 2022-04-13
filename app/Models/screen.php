<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class screen extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'screen_type',
        'image',
        'Discrption1st',
        'Color',
        'ContainarButtonBarColor',
        'IconsBackgroundColor',
        'IconsColor',
        // 'profile_id',
        'Created_by',

    ];
    public function app_profile()
    {
    return $this->belongsTo(app_profile::class,'profile_id');
    }
}
