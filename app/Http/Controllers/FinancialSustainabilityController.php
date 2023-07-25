<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinancialSustainabilityController extends Controller
{
    //

    public function index(){
        return view('users.financial-sustainability.financial-sustainability');
    }

    public function financeform(){
        return view('users.financial-sustainability.financial-sustainability-forms');
    }
}
