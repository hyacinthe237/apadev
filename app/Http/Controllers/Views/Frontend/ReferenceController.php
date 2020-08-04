<?php

namespace App\Http\Controllers\Views\Frontend;

use App\Models\Reference;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReferenceController extends Controller
{
    public function index ()
    {
        $references = Reference::get();
        return view('front.pages.references', compact('references'));
    }

}
