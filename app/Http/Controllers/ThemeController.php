<?php

namespace App\Http\Controllers;

use App\Models\User;

class ThemeController extends Controller
{
    public function themeOne($id)
    {
        if (auth()->user()) {
            $user = User::whereRelation('profile', 'slug', '!=', null)
                ->whereRelation('profile', 'slug', $id)->first();
        } else {
            $user = User::whereRelation('profile', 'slug', '!=', null)
                ->whereRelation('profile', 'settings->public', 'true')
                ->whereRelation('profile', 'slug', $id)->first();
        }

        if (is_null($user)) {
            return redirect()->route('home');
        }

        if (!auth()->user()) {
            $user->increment('total_views');
        }

        return view('pages.template-one', compact('user'));
    }
}
