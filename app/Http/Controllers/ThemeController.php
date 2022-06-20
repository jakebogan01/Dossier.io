<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function themeOne()
    {
        $user = auth()->user();

        return view('pages.template-one', compact('user'));
    }
}
