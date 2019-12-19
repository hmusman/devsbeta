<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
class serviceController extends Controller
{
    
    public function our_services(){

        $services = Service::all();
        return view('Pages.services', compact('services'));
    }

    public function single_service($slug){

        $service = Service::where('slug', $slug)->first();
        return view('Pages.single-service', compact('service'));
    }
    
    // public function image_tag($id){
    // 	$image = Service::where('id', $id)->first();
    	
    // }
}
