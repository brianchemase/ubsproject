<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MissionSustainabilityController extends Controller
{
    //
    public function index(){
        return view('users.mission-sustainability.mission-sustainability');
    }


    public function bibleTranslation(){
        return view('users.mission-sustainability.bible-translation');
    }

    public function biblePublishingAndDistribution(){
        return view('users.mission-sustainability.bible-publishing-and-distribution');
    }

    public function scriptureEngagement(){
        return view('users.mission-sustainability.scripture-engagement');
    }
}
