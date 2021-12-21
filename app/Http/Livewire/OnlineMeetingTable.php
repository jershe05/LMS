<?php

namespace App\Http\Livewire;

use App\Domains\Class\Models\OnlineMeeting;
use Livewire\Component;

class OnlineMeetingTable extends Component
{
    public $classId;
    public $onlineMeetings;

    public function getListeners()
    {
        return [
            'loadOnlineMeeting' => 'loadOnlineMeeting'
        ];
    }

    public function loadOnlineMeeting()
    {
        $this->onlineMeetings = OnlineMeeting::where('class_id',$this->classId)->orderBy('date', 'desc')->get();
    }

    public function mount($classId)
    {
        $this->classId = $classId;
        $this->onlineMeetings = OnlineMeeting::where('class_id',$this->classId)->orderBy('date', 'desc')->get();

    }
    public function delete($id)
    {

        $student = OnlineMeeting::where('id', $id)->first();
        $student->delete();
        $this->onlineMeetings = OnlineMeeting::where('class_id',$this->classId)->orderBy('date', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.online-meeting-table');
    }
}
