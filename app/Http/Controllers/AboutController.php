<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Requests\ContactFormRequest

class AboutController extends Controller
{
    public function create()
    {
        return view('about.contact');
    }
    public function store()
    {
        return Redirect::route('contact')->with('message', 'Grazie per averci contattato');
    }
}
