<?php

namespace App\Http\Livewire;

use App\Domains\Class\Models\ModelClass;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class TeacherClassTable extends DataTableComponent
{


    public function mount($teacherId)
    {
        session(['teacher_id' => $teacherId]);
    }

    public function columns(): array
    {
        return [
            Column::make(__('class'))
                ->format(function($key, $value, $row) {
                    return $row->subject->name;
                })->asHtml()
                ->sortable(),
            Column::make(__('Number of Students'))
                ->format(function($key, $value, $row) {
                    return $row->students->count();
                })->asHtml()
                ->sortable(),
            Column::make(__('Actions'))
                ->format(function ($value, $column, $row) {
                    return view('backend.teacher.includes.class-action', ['row' => $row]);
                }),
        ];
    }

    public function query(): Builder
    {
        return ModelClass::where('teacher_id', session('teacher_id'));
    }

}
