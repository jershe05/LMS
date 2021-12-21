<?php
namespace App\Domains\Teacher\Http\Controllers;
use App\Domains\Auth\Models\User;
class TeacherController
{
    public function index()
    {
        return view('backend.teacher.index');
    }

    public function classe(User $teacher)
    {
        return view('backend.teacher.class')
            ->with('teacher', $teacher);
    }
}
