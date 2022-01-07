<?php

namespace App\Http\Controllers\Frontend;

/**
 * Class HomeController.
 */
class HomeController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        if(auth()->check())
        {
            if(auth()->user()->type === 'teacher')
            {
                return view('backend.teacher.dashboard');
            }

            if(auth()->user()->type === 'student')
            {
                return view('backend.student.dashboard');
            }
            return;
        }
        return view('frontend.auth.login');
    }
}
