<?php

namespace App\Http\Livewire;

use App\Domains\Auth\Models\User;
use App\Domains\Class\Models\StudentClass;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class ClassAddStudent extends DataTableComponent
{

    public function mount($classId)
    {
        session(['class_id' => $classId]);
    }

    public function columns(): array
    {
        return [
            Column::make(__('Name'))
                ->sortable(),
            Column::make(__('Email'))
                ->sortable(),

        ];
    }

    public function query(): Builder
    {
        return User::where('type', User::TYPE_STUDENT);
    }

    public array $bulkActions = [
        'add' => 'Add Student',
    ];

    public function add()
    {
        if(count($this->selected))
        {
            foreach($this->selected as $selected)
            {
                StudentClass::create([
                    'class_id' => session('class_id'),
                    'student_id' => $selected
                ]);
            }
        }
        $this->emit('displayStudents');
        $this->resetAll();
    }

    // if (count($this->selected)) {


}
