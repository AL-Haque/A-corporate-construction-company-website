<?php

namespace App\Http\Controllers;

use App\Models\Map;
use App\Models\Banner;
use App\Models\Company;
use App\Models\UserContact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
 public function index(){
     $info=Company::first();
     $map=Map::first();
     $banner=Banner::first();
    return view('frontend.contact',compact('info','map','banner'));
 }

 public function store(){

    UserContact::create([
        'name' => \request('name'),
        'email' => \request('email'),
        'subject' => \request('subject'),
        'massage' => \request('massage'),

    ]);

    return redirect()->back();
 }
 
 public function contact_store(){

    UserContact::create([
        'name' => \request('name'),
        'email' => \request('email'),
        'subject' => \request('subject'),
        'massage' => \request('massage'),

    ]);

    return redirect()->back();
 }
}
