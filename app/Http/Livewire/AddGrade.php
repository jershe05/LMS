<?php

namespace App\Http\Livewire;

use App\Domains\Class\Models\Grade;
use App\Domains\Class\Models\StudentClass;
use Livewire\Component;

class AddGrade extends Component
{
    public $message;
    public $classId;
    public $period;
    public $studentId;
    public $students;
    public $grade;
    public $rules = [
        'studentId' => 'required',
        'period' => 'required',
        'grade' => 'required'
    ];

    public function mount($classId)
    {
        $this->classId = $classId;
        $this->students = StudentClass::where('class_id', $this->classId)->get();
    }

    public function add()
    {

        $this->validate();
        $period = $this->period;
        $existingGrade = Grade::where('user_id', $this->studentId)
            ->where('class_id', $this->classId)
            ->first();

        if($existingGrade)
        {
            $existingGrade->{$this->period} = $this->grade;
            $existingGrade->save();
            $existingGrade->refresh();
        } else {
            $grade = Grade::updateOrCreate([
                'user_id' => $this->studentId,
                'class_id' => $this->classId,
                $this->period => $this->grade,
            ]);
        }

        $this->studentId = null;
        $this->grade = null;
        $this->period = null;

        $this->emit('loadGrades');
    }

    public function render()
    {
        return view('livewire.add-grade');
    }
}
