<?php
namespace App\Domains\Class\Models;

use App\Domains\Subject\Models\Subject;
use Illuminate\Database\Eloquent\Model;
use App\Domains\Auth\Models\User;
class StudentClass extends Model
{
    protected $table = "student_class";
    protected $fillable = [
        'student_id',
        'class_id',
        'created_at',
        'updated_at'
    ];

    public function subject()
    {
        return $this->hasOne(Subject::class);
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'student_id');
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

}
