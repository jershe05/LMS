<?php

namespace App\Http\Livewire;

use App\Domains\Class\Models\StudentClass;
use Livewire\Component;

class StudentClassSchedule extends Component
{
    public $schedules;
    public $studentClasses;
    public function mount()
    {
        $this->studentClasses = StudentClass::where('student_id', auth()->user()->id)->get();

    }

    public function render()
    {
        return view('livewire.student-class-schedule');
    }
}
