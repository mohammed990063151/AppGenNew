<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class app_profile extends Model
{
    protected $fillable = [
        'orgname',
        'orgemail',
        'ogwhatsapp',
        // 'app_id',
        'Created_by',
    ];

    public function section()
    {
    return $this->belongsTo('App\app');
    }
}
