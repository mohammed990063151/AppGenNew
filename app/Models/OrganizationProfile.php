<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'email',
        'phone_no',
        'whatsapp_no',
        'logo',
    ];

    public function getLogoAttribute($key)
    {
        return asset('logo/' . $key);
    }
}
