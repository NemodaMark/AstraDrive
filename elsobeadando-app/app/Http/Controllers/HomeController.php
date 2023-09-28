<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function informations()
    {
        return view('alsites.informations');
    }

    public function documentary()
    {
        return view('alsites.documentary');
    }

    public function parkinglot()
    {
        return view('alsites.parkinglot');
    }

    public function quiz()
    {
        return view('alsites.quiz');
    }
}
