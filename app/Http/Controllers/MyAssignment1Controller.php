<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MyAssignment1;

class MyAssignment1Controller extends Controller
{
    
public function index() {
    $rec = MyAssignment1::OrderBy('achievement_date', 'ASC')->get();
    return view('Achievement',compact('rec'));
  
    //return view('Assignment1index', ["name"=>$slug]);
    }

    public function index1() {
    //     // $rec = MyAssignment1::OrderBy('achievement_date', 'ASC')->get();
    //     // return view('Assignment1index',compact('rec'));
     return view("Assignment1index");
    //     //return view('Assignment1index', ["name"=>$slug]);
     }

}