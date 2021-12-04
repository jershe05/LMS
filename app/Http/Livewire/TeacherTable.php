<?php

namespace App\Http\Livewire;

use App\Domains\Auth\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class TeacherTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make(__('Name'))
                ->sortable(),
            Column::make(__('Email'))
                ->sortable(),
            Column::make(__('Actions')),
        ];
    }

    public function query(): Builder
    {
        return User::where('type', User::TYPE_TEACHER);
    }

    public function rowView(): string
    {
        return 'backend.teacher.includes.row';
    }
}
