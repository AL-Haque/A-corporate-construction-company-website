<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpcomingEventController extends Controller
{
    public function index(){

        return view('frontend.upcoming-event');
    }
}
