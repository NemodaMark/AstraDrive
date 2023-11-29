<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

// use Illuminate\Support\Facades\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

    Auth::routes(['verify' => true]);
    /*Dropdown*/
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    /*Navbar*/
    Route::get('/informations', [App\Http\Controllers\Controller::class, 'informations'])->name('informations');
    Route::get('/documentary', [App\Http\Controllers\Controller::class, 'documentary'])->name('documentary');
    Route::get('/copyright', [App\Http\Controllers\Controller::class, 'copyright'])->name('copyright');

    /*quiz*/
    Route::get('/quiz', [QuizController::class, 'show'])->name('quiz.show');
    Route::post('/quiz/submit', [QuizController::class, 'submit'])->name('quiz.submit');
    Route::post('/quiz/save-results/{score}', [QuizController::class, 'saveResults']);


    /*Profile Page*/
    Route::get('/edit', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');
    use App\Http\Controllers\HomeController;
    Route::get('/picture/change/{jpg}', [HomeController::class, 'pictureChange'])->name('picture.change');

    Route::get('/parkinglot', [App\Http\Controllers\HomeController::class, 'parkinglot'])->name('parkinglot');



// Route::put('/themes', function(Request $request) {
//     $request->validate([
//        'theme' => ['required', Rule::in(['darkly', 'cerulean'])]
//     ]);

//     session(['theme' => $request->theme]);
//     return back();
//  })->name('themes.update');
