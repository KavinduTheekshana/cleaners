<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::where('status', true)->get(); // Fetch only active services
        return view('frontend.home.index', compact('services'));
    }
}
