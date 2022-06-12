<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard ()
    {
        return view('dashboard');
    }

    public function profile ()
    {
        $currentUser = auth()->user()->profile;

        return view('pages.jetstream.profile', compact('currentUser'));
    }

    public function skills ()
    {
        return view('pages.jetstream.skills');
    }

    public function experiences ()
    {
        return view('pages.jetstream.experiences');
    }

    public function projects ()
    {
        return view('pages.jetstream.projects');
    }

    public function testimonials ()
    {
        return view('pages.jetstream.testimonials');
    }

    public function contact ()
    {
        return view('pages.jetstream.contact');
    }
}
