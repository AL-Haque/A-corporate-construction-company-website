<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Service;
use Illuminate\Http\Request;

class WebServiceController extends Controller
{
    public function index(){

        $service=Service::all();
        $banner=Banner::first();
        return view('frontend.service',compact('service','banner'));
    }
}
