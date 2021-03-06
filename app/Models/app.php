<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class app extends Model
{
    use HasFactory;
    protected $fillable = [
        'AppName',
        'version',
        'user_id',
        'Link',
        'Discrptions',
       'WhatsApp',
        'Phone',
        'Splash_Screen',
        'Logo',
        'Created_by',
        'profile_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function Screen(){
        return $this->hasMany(screen::class);
    }

    public function AppProfile(){
        return $this->hasOne(app_profile::class);
    }
}
