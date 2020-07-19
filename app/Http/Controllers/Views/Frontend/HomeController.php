<?php

namespace App\Http\Controllers\Views\Frontend;

// use Auth;
use App\Models\Association;
// use App\Models\User;
use App\Models\Reference;
// use App\Models\Ressource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home ()
    {
        $references = Reference::inRandomOrder()->limit(6)->get();
        return view('front.home.home', compact('references'));
    }

}
