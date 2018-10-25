<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('layouts.master');
        //return 'This is the future homepage of project 3.';
    }
}
