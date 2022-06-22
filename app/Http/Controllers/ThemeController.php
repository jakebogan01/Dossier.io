<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function themeOne($id)
    {
        $userName = strtolower(preg_replace("/[_\s-]+/", " ", $id));
        $user = User::whereName($userName)->first();

        return view('pages.template-one', compact('user'));
    }
}
