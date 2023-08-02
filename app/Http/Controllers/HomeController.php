<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function userHome()
    {
        return view('/users',["msg"=>"Hello! I am user"]);
    }


    public function adminHome()
    {
        return view('/admins',["msg"=>"Hello! I am admin"]);
    }


    public function supervisorHome()
    {
        return view('/supervisors',["msg"=>"Hello! I am supervisor"]);
    }
}
