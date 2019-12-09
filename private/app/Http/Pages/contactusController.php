<?php

namespace App\Http\Controllers\Pages;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Contact;
class contactusController extends Controller
{
    //
    public function index(){
         $contents=Contact::all();
    	return view('Pages.contactus',['contents'=>$contents,]);
    }
}
