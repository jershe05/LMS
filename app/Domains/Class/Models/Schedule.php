<?php
namespace App\Domains\Class\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'class_schedules';
    protected $fillable = [
        'class_id',
        'time',
        'days',
        'created_at',
        'update_at'
    ];
}
