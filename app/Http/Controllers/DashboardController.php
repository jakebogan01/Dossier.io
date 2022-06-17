<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

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
        $currentUser = auth()->user()->skill;

        return view('pages.jetstream.skills', compact('currentUser'));
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
