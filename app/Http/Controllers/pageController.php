<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function home(){
        return view ('movespages.home');
    }    //

    public function contact_us(){
        return view ('movespages.contactus');
    }  
 
    public function about_us(){
        return view ('movespages.about');
    }    //


    public function services(){
        return view ('movespages.services');
    }    //
}
