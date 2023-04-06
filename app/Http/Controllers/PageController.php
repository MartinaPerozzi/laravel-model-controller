<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// USE DEL MODEL
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        // Metto in un array di oggetti tutte i movie della tabella
        $movies = Movie::all();

        return view('movies.list', compact('movies'));
    }
}
