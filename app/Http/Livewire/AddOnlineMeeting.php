<?php

namespace App\Http\Livewire;

use App\Domains\Class\Models\OnlineMeeting;
use App\Domains\Class\Models\Schedule;
use Livewire\Component;

class AddOnlineMeeting extends Component
{
    public $message;
    public $classId;
    public $videoLink;
    public $description;
    public $date;
    public $rules = [
        'description' => 'required',
        'date' => 'required'
    ];

    public function mount($classId)
    {
        $this->classId = $classId;
    }

    public function add()
    {
        $this->validate();
        $onlineMeeting = OnlineMeeting::create([
            'description' => $this->description,
            'class_id' => $this->classId,
            'date' => $this->date,
            'video_link' => $this->videoLink
        ]);

        $this->description = null;
        $this->date = null;
        $this->videoLink = null;

        $this->emit('loadOnlineMeeting');
    }

    public function render()
    {
        return view('livewire.add-online-meeting');
    }
}
