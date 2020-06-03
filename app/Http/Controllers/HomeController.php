<?php

namespace App\Http\Controllers;
use App\hotel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function offers()
    {
        return view('offers');
    }

    public function blog()
    {
        $hotel = hotel::all();
        return view('blog', compact($hotel, 'hotel'));
    }

    public function contact()
    {
        return view('contact');
    }
}
