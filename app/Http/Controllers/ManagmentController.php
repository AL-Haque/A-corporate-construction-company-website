<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Employee;
use Illuminate\Http\Request;

class ManagmentController extends Controller
{
    public function index(){
        $employee=Employee::all();
        $banner=Banner::first();
        return view('frontend.managment',compact('employee','banner'));
    }
}
