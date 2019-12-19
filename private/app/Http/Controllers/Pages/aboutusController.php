<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;
class aboutusController extends Controller
{
    //
    public function index(){
    	$teamMembers=About::all();
   
    return view('Pages.about',compact('teamMembers'));
    }
    public function news(){
   
    return view('Pages.news');
    }
    public function help_center(){
   
    return view('Pages.help_center');
    }
    public function terms_conditions(){
   
    return view('Pages.terms_conditions');
    }
}
