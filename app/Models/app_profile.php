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
        'color',
        'pc',
        'sc',
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
}
