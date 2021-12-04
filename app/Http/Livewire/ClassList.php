<?php

namespace App\Http\Livewire;

use App\Domains\Class\Models\ModelClass;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class ClassList extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make(__('Subject'))
                ->sortable(),
            Column::make(__('Teacher')),
            Column::make(__('Grade Level')),
            Column::make(__('Actions')),
        ];
    }

    public function query(): Builder
    {
        $query = ModelClass::query();
        $query->join('subjects', 'subjects.id', '=', 'classes.subject_id')
            ->join('users', 'users.id', '=', 'classes.teacher_id')
            ->where('users.type', 'teacher')
            ->select('classes.id as class_id', 'subjects.name as subject_name', 'users.name as user_name', 'classes.grade');

        return $query;
    }

    public function rowView(): string
    {
        return 'backend.class.includes.row';
    }
}
