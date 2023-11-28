<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
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

    public function parkinglot()
    {
        return view('alsites.parkinglot');
    }

    public function edit()
    {
        $pictures = DB::select('SELECT jpg FROM `profile_pics`;');
        return view('alsites.edit',['pictures'=>$pictures]);
    }

    public function pictureChange($jpg)
{
    // Assuming you want to update the 'jpg' column in the 'users' table
    $userId = Auth::id(); // Get the authenticated user's ID

    // Your update query to change the 'jpg' value
    DB::table('users')->where('id', $userId)->update(['jpg' => $jpg]);

    return redirect()->back()->with('success', 'Profilkép sikeresen megváltoztatva');
}

}
