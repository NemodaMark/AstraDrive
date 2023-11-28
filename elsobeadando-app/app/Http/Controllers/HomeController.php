<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
        return view('alsites.edit');
    }

    // public function pictureUpload(Request $request){
    //     if (session() -> has('user')){
    //         $data = $request->validate(
    //             [
    //                 'image' => 'required|image|max:1024'
    //             ],
    //             [
    //                 'image.required' => 'Kép feltöltése kötelező!',
    //                 'image.image' => 'Amit feltöltöttél nem kép fájl!',
    //                 'image.max' => 'A kép maximum 1 MB lehet!'
    //             ]
    //             );
    //         foreach (session()->get('user') as $user)
    //             $userid = $user->user_id;

    //         $eredetikep = DB::select("SELECT user_profilepic FROM users WHERE user_id = '$userid'");
    //         foreach ($eredetikep as $eredet) {
    //             if ($eredet->user_profilepic != "defaultProfilePic.png") {
    //                 $deleted=Storage::disk('public')->delete(public_path('profilepics/'.$eredet->user_profilepic));
    //             }
    //         }
    //         $imgstring = $user->user_username.$request->image->getClientOriginalName();

    //         DB::table('users')->where('user_id','=', $userid)->update(['user_profilepic' => $imgstring]);
    //         $user->user_profilepic = $imgstring;

    //         $request->image->move(public_path('profilepics'), $imgstring);

    //         return back()->with('success', 'Kép sikeresen elmentve');
    //     }
    //     else{
    //         return to_route('register');
    //     }
    // }

}
