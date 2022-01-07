<?php

namespace App\Http\Livewire;

use App\Domains\Class\Models\Module;
use Livewire\Component;

class StudentModule extends Component
{
    public $classId;
    public $classes;

    public function mount()
    {
        $this->classes = auth()->user()->studentClasses;

    }

    public function render()
    {
        return view('livewire.student-module');
    }
}
