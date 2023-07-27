<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollaborationsController extends Controller
{
    //
    public function index(){
        return view('users.collaborations.collaborations');
    }

    public function membershipAndPartnership(){
        return view('users.collaborations.membership-and-partnerships');
    }
}
