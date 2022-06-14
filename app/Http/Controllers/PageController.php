<?php

namespace App\Http\Controllers;
use App\Hotel; // Richiamo il mio Model Hotel
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $hotels = Hotel::all();
        /* dd($hotels); */
        return view('home' , compact('hotels'));
    }
}
