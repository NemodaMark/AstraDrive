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
        $userId = Auth::id();
        DB::table('users')->where('id', $userId)->update(['jpg' => $jpg]);

        return redirect()->back()->with('success', 'Profilkép sikeresen megváltoztatva');
    }

    public function changeDescription(Request $request)
    {
        $floatingTextarea2 = $request->input('floatingTextarea2');
        $userId = Auth::id();
        DB::table('users')->where('id', $userId)->update(['description' => $floatingTextarea2]);

        return redirect()->back()->with('success', 'A Leírásod sikeresen megváltoztatva');
    }


}
