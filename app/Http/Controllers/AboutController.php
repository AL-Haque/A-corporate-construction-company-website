<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $info=Company::first();
        $employee=Employee::all()->take(3);
        $banner=Banner::first();
        return view('frontend.about',compact('info','employee','banner'));
    }
}
