<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        // Obtener a quienes seguimos
        dd( auth()->user()->followings->pluck("username", "id" )->toArray());
        return view("home");
    }
}
