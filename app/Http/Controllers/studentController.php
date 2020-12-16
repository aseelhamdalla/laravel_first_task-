<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    //
    public function index(){
      
        $student_name ='aseel';
        if(1){
                 return view ('student.index',compact("student_name"));
        }else{
            return view ('welcome');

        }
    }


 
}
