<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// USE DEL MODEL
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        // Metto in un array di oggetti tutte le case della tabelline
        $movies = Movie::all();

        return view('movies.list', compact('movies'));
    }
}
