<?php 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;

class Helper{

    public static function our_services(){

        $services = Service::all();
        return view('Pages.services', ['services' => $services]);
    }

    public static function single_service($slug){

        $service = Service::where('slug', $slug)->first();
        return view('Pages.single-service', ['service' => $service]);
    }
}