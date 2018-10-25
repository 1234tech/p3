<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function show($results = null)
    {
        return view('foods.results');
        //return 'These are the results based on your selection:' .$results;
    }
}
