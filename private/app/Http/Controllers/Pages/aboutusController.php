<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Service;

class aboutusController extends Controller
{
    //
    public function index(){
    	$teamMembers=About::all();
        $services = Service::all();

   
    return view('Pages.about',compact('teamMembers', 'services'));
    }
    public function news(){
   
    $services = Service::all();
    return view('Pages.news', compact('services'));
    }
    public function help_center(){
    $services = Service::all();
    return view('Pages.help_center', compact('services'));
    }
    public function terms_conditions(){
    $services = Service::all();
    return view('Pages.terms_conditions', compact('services'));
    }
}
