<?php

namespace App\Http\Controllers;

use App\Models\User;

class ThemeController extends Controller
{
    public function themeOne($id)
    {
        $user = User::whereRelation('profile', 'slug', '!=', null)
            ->whereRelation('profile', 'slug', $id)->first();

        return view('pages.template-one', compact('user'));
    }
}
