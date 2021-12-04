<?php
namespace App\Domains\Class\Http\Controllers;

use App\Domains\Auth\Models\User;
use App\Domains\Class\Models\ModelClass;

class ClassController
{
    public function index()
    {
        return view('backend.class.index');
    }

    public function create()
    {

        return view('backend.class.add-class');
    }

    public function show(ModelClass $class)
    {
        // dd($class->details());
        return view('backend.class.show')
            ->with('details', $class->details());
    }

    public function edit(ModelClass $class)
    {
        return view('backend.class.edit')
            ->with('class', $class);
    }
}
