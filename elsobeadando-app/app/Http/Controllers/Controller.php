<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function copyright()
    {
        return view('alsites.copyright');
    }

    public function informations()
    {
        return view('alsites.informations');
    }

    public function documentary()
    {
        return view('alsites.documentary');
    }

    public function quiz()
    {
        return view('alsites.quiz');
    }
}
