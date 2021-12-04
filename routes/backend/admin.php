<?php

use App\Domains\Class\Http\Controllers\ClassController;
use App\Domains\Student\Http\Controllers\studentController;
use App\Domains\Teacher\Http\Controllers\TeacherController;
use App\Http\Controllers\Backend\DashboardController;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('admin.dashboard'));
    });

Route::get('add/class', [ClassController::class, 'create'])->name('class.create');
Route::get('class', [ClassController::class, 'index'])->name('class.index');
Route::get('class/show/{class}', [ClassController::class, 'show'])->name('class.show');
Route::delete('class', [ClassController::class, 'delete'])->name('class.destroy');
Route::put('class', [ClassController::class, 'update'])->name('class.update');
Route::get('class/edit/{class}', [ClassController::class, 'edit'])->name('class.edit');
Route::get('teacher', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('student', [studentController::class, 'index'])->name('student.index');

