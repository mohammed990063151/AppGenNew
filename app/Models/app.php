<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class app extends Model
{
    use HasFactory;
    protected $fillable = [
        'App_Name',
        'Discrptions',
        // 'version',
        'Web_Url',
        'WhatsappNumber',
        'PhoneNumber',
        'Logo',
        'SplashScreenImage',
        'Created_by',
    ];
}
