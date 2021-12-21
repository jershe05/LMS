<?php

namespace App\Http\Livewire;

use App\Domains\Class\Models\Module;
use Livewire\Component;

class AddModule extends Component
{
    public $message;
    public $classId;
    public $file;
    public $description;
    public $rules = [
        'description' => 'required',
        'file' => 'required'
    ];

    public function mount($classId)
    {
        $this->classId = $classId;
    }

    public function add()
    {
        $this->validate();
        $module = Module::create([
            'description' => $this->description,
            'class_id' => $this->classId,
            'file' => $this->file,
        ]);

        $this->description = null;
        $this->file = null;


        $this->emit('loadModules');
    }
    public function render()
    {
        return view('livewire.add-module');
    }
}
