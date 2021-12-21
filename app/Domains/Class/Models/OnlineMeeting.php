<?php

namespace App\Domains\Class\Models;

use Illuminate\Database\Eloquent\Model;

class OnlineMeeting extends Model
{
    protected $fillable = [
        'description',
        'class_id',
        'schedule_id',
        'date',
        'created_at',
        'updated_at',
        'video_link'
    ];

    public function schedule()
    {
        return $this->hasOne(Schedule::class, 'id', 'schedule_id');
    }
}
