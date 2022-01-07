<?php

namespace App\Http\Livewire;

use App\Domains\Class\Models\Grade;
use App\Domains\Class\Models\StudentClass;
use Livewire\Component;

class StudentGrade extends Component
{
    public $classes;
    public $grades;
    public function mount()
    {
        $this->classes = StudentClass::where('student_id', auth()->user()->id)->get();
        $gradeCollection = collect();
        foreach($this->classes as $class)
        {
            $grade = Grade::where('class_id', $class->id)
                ->where('user_id', auth()->user()->id)
                ->get();
            $gradeCollection->push($grade);
        }
        $this->grades = $gradeCollection;

    }

    public function render()
    {
        return view('livewire.student-grade');
    }
}
