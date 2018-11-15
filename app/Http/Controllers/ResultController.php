<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{

    public function results(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'feedback' => 'required|max:255',
        ]);

        $validEmail = $request->input('email');
        $validFeedback = $request->input('feedback');
        $validContact = $request->input('contact');


        return view('foods.results')->with([
            'email' => $validEmail,
            'feedback' => $validFeedback,
            'contact' => $validContact
        ]);

    }//end results function

} // end class


