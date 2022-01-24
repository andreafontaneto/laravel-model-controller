<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){

        $name = 'Andrea';
        $surname = 'Fontaneto';

        $movies = Movie::all();

        //dump($movies);

        return view('home', compact('name', 'surname', 'movies'));
    }

}
