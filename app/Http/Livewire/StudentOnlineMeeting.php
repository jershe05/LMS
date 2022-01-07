<?php

namespace App\Http\Livewire;

use App\Domains\Class\Models\OnlineMeeting;
use App\Domains\Class\Models\StudentClass;
use Livewire\Component;

class StudentOnlineMeeting extends Component
{
    public $classId;
    public $onlineMeetings;
    public $classes;
    public $watchContent;

    public function mount()
    {
        $this->classes = auth()->user()->studentClasses;

    }

    public function watch($content)
    {
        $this->watchContent = $content;

    }

    public function render()
    {
        return view('livewire.student-online-meeting');
    }
}
