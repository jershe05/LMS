<?php

namespace App\Http\Controllers\Frontend\User;

/**
 * Class DashboardController.
 */
class DashboardController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        if(auth()->user()->type === "teacher")
        {
            return view('backend.teacher.dashboard');
        }
        return view('frontend.user.dashboard');
    }
}
