<?php

namespace App\Http\Controllers\Views\Backend;

use Auth;
use App\Models\Association;
use App\Models\User;
use App\Models\Reference;
use App\Models\Ressource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard ()
    {
        $user  = User::whereIsActive(true)->whereId(Auth::id())->first();
        $membres  = User::whereIsActive(true)->count();
        $association  = Association::whereIsActive(true)->first();
        $references  = Reference::count();
        $ressources  = Ressource::count();

        return view('admin.all.dashboard', compact('membres', 'association', 'references', 'ressources', 'user'));
    }

}
