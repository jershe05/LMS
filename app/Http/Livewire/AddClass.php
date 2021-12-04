<?php

namespace App\Http\Livewire;

use App\Domains\Auth\Models\User;
use App\Domains\Class\Models\ModelClass;
use App\Domains\Subject\Models\Subject;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class AddClass extends Component
{
    public $teachers;
    public $subjects;
    public $grade;
    public $teacher;
    public $subject;
    public $Schedules;
    public $details;
    public $btnLabel = "Add";
    public $formTitle = 'Add Class';
    public $gradeLevels = [
        1 => 'Grade I',
        2 => 'Grade II',
        3 => 'Grade III',
        4 => 'Grade IV',
        5 => 'Grade V',
        6 => 'Grade VI'
    ];
    public $selectedGradeLevel;
    protected $rules = [
        'teacher' => 'required',
        'subject' => 'required',
        'grade' => 'required'
    ];
    public function mount(ModelClass $classObject)
    {
        if($classObject->count)
        {
            $this->btnLabel = 'Save';
            $this->formTitle = 'Edit Class';
            $this->details = $classObject->details();
            $this->teacher = $this->details->teacher_id;
            $this->subject = $this->details->subject_id;
            $this->grade = $this->details->grade;
            $this->selectedGradeLevel = $this->gradeLevels[$this->details->grade];
            $this->Schedules = $classObject->schedule();
        }

        $this->teachers = User::where('type', 'teacher')->get();
        $this->subjects = Subject::all();

    }
    public function add()
    {
        if($this->details)
        {
            $class = ModelClass::where('id', $this->details->id)->first();
            $class->teacher_id = $this->teacher;
            $class->grade = $this->grade;
            $class->subject_id = $this->subject;
            $class->updated_at = Carbon::now()->toDateString();
            $class->save();
            return redirect()->route('admin.class.index');
        }
        $this->validate();
        ModelClass::create([
            'teacher_id' => $this->teacher,
            'grade' => $this->grade,
            'subject_id' => $this->subject,
            'year' => Carbon::now()->format('Y')
        ]);
        $this->teacher = null;
        $this->subject = null;
        $this->grade = null;
        session()->flash('message', 'Class Successfully created!');
    }

    public function render()
    {
        return view('livewire.add-class');
    }
}
