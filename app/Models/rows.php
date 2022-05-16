<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rows extends Model
{
    use HasFactory;
    protected $table = 'rows';

    protected $fillable = [
        'name',
        'age',
        'salary',
        'gender',
    ];

}
