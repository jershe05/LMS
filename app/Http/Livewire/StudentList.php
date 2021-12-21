<?php

namespace App\Http\Livewire;

use App\Domains\Class\Models\StudentClass;
use Livewire\Component;

class StudentList extends Component
{
    public $studentList;
    public $classId;
    public function mount($classId)
    {
        $this->studentList = StudentClass::where('class_id', $classId)->get();
        $this->classId = $classId;

    }

    public function getListeners()
    {
        return [
            'displayStudents' => 'displayStudents',
        ];
    }

    public function displayStudents()
    {
        $this->studentList = StudentClass::where('class_id', $this->classId)->get();
    }

    public function delete($studentId)
    {

        $student = StudentClass::where('id', $studentId)->first();
        $student->delete();
        $this->studentList = StudentClass::where('class_id', $this->classId)->get();
    }

    public function render()
    {
        return view('livewire.student-list');
    }
}
