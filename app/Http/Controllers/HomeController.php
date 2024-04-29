<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use Illuminate\Contracts\View\View;


class HomeController
{
    public function home(): View
    {
        $properties = Properties::with('heating', 'specificities', 'images')->latest()->take(3)->get();

        return view('home',['properties'=> $properties] );
    }
}
