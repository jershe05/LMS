<?php

namespace App\Http\Livewire;

use App\Domains\Class\Models\Schedule;
use Livewire\Component;

class ClassScheduleTable extends Component
{
    public $classId;
    public $schedules;

    public function getListeners()
    {
        return [
            'loadSchedules' => 'loadSchedules'
        ];
    }

    public function loadSchedules()
    {
        $this->schedules = Schedule::where('class_id',$this->classId)->get();
    }

    public function mount($classId)
    {
        $this->classId = $classId;
        $this->schedules = Schedule::where('class_id', $classId)->get();
    }

    public function delete($scheduleId)
    {

        $student = Schedule::where('id', $scheduleId)->first();
        $student->delete();
        $this->schedules = Schedule::where('class_id', $this->classId)->get();
    }

    public function render()
    {
        return view('livewire.class-schedule-table');
    }
}
