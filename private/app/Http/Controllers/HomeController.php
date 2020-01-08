<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('Pages.index', compact('services'));
    }
}