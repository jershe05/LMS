<?php
namespace App\Domains\Class\Models;

use App\Domains\Subject\Models\Subject;
use Illuminate\Database\Eloquent\Model;

class ModelClass extends Model
{
    protected $table = "classes";
    protected $fillable = [
        'teacher_id',
        'grade',
        'subject_id',
        'year',
        'created_at',
        'updated_at'
    ];

    public function details()
    {
        return  $this->join('subjects', 'subjects.id', '=', 'classes.subject_id')
        ->join('users', 'users.id', '=', 'classes.teacher_id')
        ->where('users.type', 'teacher')
        ->where('classes.id', $this->id)
        ->select('classes.*', 'classes.id as class_id', 'subjects.name as subject_name', 'users.name as user_name', 'classes.grade')
        ->first();
    }

    public function schedules()
    {
        return  $this->hasMany(Schedule::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function students()
    {
        return $this->hasMany(StudentClass::class, 'class_id', 'id');
    }
}
