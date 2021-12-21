<?php

namespace App\Http\Livewire;

use App\Domains\Class\Models\Grade;
use Livewire\Component;

class GradeTable extends Component
{
    public $classId;
    public $grades;

    public function getListeners()
    {
        return [
            'loadGrades' => 'loadGrades'
        ];
    }

    public function loadGrades()
    {
        $this->grades = Grade::where('class_id',$this->classId)->get();
    }

    public function mount($classId)
    {
        $this->classId = $classId;
        $this->grades = Grade::where('class_id',$this->classId)->get();

    }

    public function delete($id)
    {

        $student = Grade::where('id', $id)->first();
        $student->delete();
        $this->grades = Grade::where('class_id',$this->classId)->orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.grade-table');
    }
}
