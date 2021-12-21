<?php
namespace App\Domains\Class\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = [
        'class_id',
        'file',
        'description',
        'created_at',
        'updated_at'
    ];
}
