<?php

namespace App\Domains\Subject\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name',
        'created_at',
        'updated_at'
    ];
}
