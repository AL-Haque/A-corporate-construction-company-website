<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Client;
use App\Models\Company;
use App\Models\Photo;
use App\Models\Video;
use App\Models\Service;
use App\Models\Employee;
use App\Models\Slider;
use App\Models\UserEmail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $photo=Photo::all();
        $managment=Employee::all()->take(3);
        $service=Service::all()->take(4);
        $video=Video::all();
        $info=Company::first();
        $client=Client::all();
        $slider=Slider::all();
        $banner=Banner::first();
        return view('frontend.index',compact('photo','managment','service','video','info','client','banner','slider'));
    }

    public function email(){

        UserEmail::create([
            'user_email' =>\request('user_email'),
        ]);
        return redirect()->back()->with('success','You are successfully join our mailing list');
    }

}
