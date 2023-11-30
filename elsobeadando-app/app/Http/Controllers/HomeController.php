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
    $userId = Auth::id();
    $userCar = DB::select('SELECT count(id) as mycar FROM `users_cars` where userID = ?;', [$userId]);

    // Extract the count from the array
    $userCarCount = isset($userCar[0]->mycar) ? $userCar[0]->mycar : 0;

    return view('home', ['userCar' => $userCarCount]);
}

    public function parkinglot()
    {
        $userId = Auth::id();
        $userCar = DB::select('SELECT users_cars.id,userID, `cars`.name, fuels.fuel_name, chassis.type FROM users_cars Inner JOIN `cars` on `cars`.id = users_cars.carID Inner JOIN fuels on fuels.id = users_cars.fuelID Inner JOIN chassis on chassis.id = users_cars.chassiID WHERE userID = ?;', [$userId]);

        // Assuming you want to pass the first car as $selectedCar
        $selectedCar = count($userCar) > 0 ? $userCar[0] : null;

        return view('alsites.parkinglot', ['userCar' => $userCar, 'selectedCar' => $selectedCar]);
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

    public function addCar()
    {
        $cars = DB::select('SELECT id,name FROM `cars`;');
        $fuels = DB::select('SELECT id,fuel_name FROM `fuels`;');
        $types = DB::select('SELECT id,type FROM `chassis`;');

        return view('alsites.addCar',['cars'=>$cars,'fuels'=>$fuels,'types'=>$types]);

    }
    public function addCarToUser(Request $request)
    {

        // Validate the incoming request
        $request->validate([
            'car_type' => 'required|exists:cars,id',
            'car_fuel' => 'required|exists:fuels,id',
            'car_chassis' => 'required|exists:chassis,id',
            ]);

        // Create a new record using Eloquent
        DB::table('users_cars')->insert([
            'userID' => Auth::id(),
            'carID' => $request->input('car_type'),
            'fuelID' => $request->input('car_fuel'),
            'chassiID' => $request->input('car_chassis'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect back to the parkinglot or to a success page
        return redirect()->route('parkinglot')->with('success', 'Car added successfully');
    }

    public function editCarToUser(Request $request, $carID = null)
{
    // Retrieve existing car data if editing
    $selectedCar = null;
    if ($carID) {
        $selectedCar = DB::table('users_cars')
            ->where('id', $carID)
            ->where('userID', Auth::id())
            ->first();
    }

    // Fetch the car, fuel, and chassis data
    $cars = DB::select('SELECT id,name FROM `cars`;');
    $fuels = DB::select('SELECT id,fuel_name FROM `fuels`;');
    $types = DB::select('SELECT id,type FROM `chassis`;');

    return view('alsites.editCar', [
        'cars' => $cars,
        'fuels' => $fuels,
        'types' => $types,
        'selectedCar' => $selectedCar,
    ]);
}


    public function updateCarToUser(Request $request, $carID)
{
    // Validate the incoming request
    $request->validate([
        'car_type' => 'required|exists:cars,id',
        'car_fuel' => 'required|exists:fuels,id',
        'car_chassis' => 'required|exists:chassis,id',
    ]);

    // Update the existing record using Eloquent
    DB::table('users_cars')
        ->where('id', $carID)
        ->where('userID', Auth::id())
        ->update([
            'carID' => $request->input('car_type'),
            'fuelID' => $request->input('car_fuel'),
            'chassiID' => $request->input('car_chassis'),
            'updated_at' => now(),
        ]);

    // Redirect back to the parkinglot or to a success page
    return redirect()->route('parkinglot')->with('success', 'Car updated successfully');
}


    public function deleteCarToUser($carID)
    {
        // Delete the existing record using Eloquent
        DB::table('users_cars')
            ->where('id', $carID)
            ->where('userID', Auth::id())
            ->delete();

        // Redirect back to the parkinglot or to a success page
        return redirect()->route('parkinglot')->with('success', 'Car deleted successfully');
    }
}
