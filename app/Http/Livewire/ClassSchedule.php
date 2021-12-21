<?php

namespace App\Http\Livewire;

use App\Domains\Class\Models\Schedule;
use Livewire\Component;

class ClassSchedule extends Component
{
    public $classId;
    public $schedules;
    public $day;
    public $from;
    public $to;
    public $message;
    public $rules = [
        'day' => 'required',
        'to' => 'required',
        'from' => 'required'
    ];

    public function mount($classId)
    {
        $this->classId = $classId;

    }

    public function add()
    {
        $this->validate();
        $from = $this->from;
        $to = $this->to;
        $this->message = null;
        $schedule = Schedule::where('id', $this->classId)
        ->where('days', $this->day)
        ->where('from', '<', $to)->where('to', '>', $from)
        ->get();

        if(count($schedule))
        {
            $this->message = 'The schedule overlaps with other schedule';
            return;
        }

        Schedule::create([
            'days' => $this->day,
            'from' => $this->from,
            'to' => $this->to,
            'class_id' => $this->classId
        ]);
        $this->emit('loadSchedules');
    }

    public function delete($schedId)
    {
        $schedule = Schedule::where('id', $schedId)->first();
        $schedule->delete();
        $this->emit('loadSchedules');
    }

    public function render()
    {
        return view('livewire.class-schedule');
    }
}
