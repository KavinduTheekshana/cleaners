<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::where('status', true)->get(); // Fetch only active services
        $testimonials = Testimonial::where('status', true)->get(); // Fetch only active services
        return view('frontend.home.index', compact('services','testimonials'));
    }

    public function about()
    {
        return view('frontend.about.index');
    }

    public function booking()
    {
        return view('frontend.bookings.index');
    }
}
