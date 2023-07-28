<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramSustainabilityController extends Controller
{
    //

    public function governanceForm(){
        return view('users.programme-sustainability.governance');
    }

    public function leadershipForm(){
        return view('users.programme-sustainability.leadership');
    }
}
