<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinancialSustainabilityController extends Controller
{
    //

    public function index(){
        return view('users.financial-sustainability.financial-sustainability');
    }

    public function incomediversificationform(){
        return view('users.financial-sustainability.income-diversification');
    }

    public function financeManagementForm(){
        return view('users.financial-sustainability.financial-management');
    }
}
