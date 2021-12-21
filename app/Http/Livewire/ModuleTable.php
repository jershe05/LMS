<?php

namespace App\Http\Livewire;

use App\Domains\Class\Models\Module;
use Livewire\Component;

class ModuleTable extends Component
{
    public $classId;
    public $modules;

    public function getListeners()
    {
        return [
            'loadModules' => 'loadModules'
        ];
    }

    public function loadModules()
    {
        $this->modules = Module::where('class_id',$this->classId)->orderBy('created_at', 'desc')->get();
    }

    public function mount($classId)
    {
        $this->classId = $classId;
        $this->modules = Module::where('class_id',$this->classId)->orderBy('created_at', 'desc')->get();

    }
    public function delete($id)
    {

        $student = Module::where('id', $id)->first();
        $student->delete();
        $this->modules = Module::where('class_id',$this->classId)->orderBy('created_at', 'desc')->get();
    }
    public function render()
    {
        return view('livewire.module-table');
    }
}
