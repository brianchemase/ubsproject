<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersDashController extends Controller
{
    //

    public function dashboard()
    {

        $data1="";



        $data = [
            'data1' => $data1,
            'data2' => $data1,
            'data3' => $data1,
            'data4' => $data1,
            // Add more data to the array as needed
        ];

        return view ('users.home')->with($data);
    }
}
