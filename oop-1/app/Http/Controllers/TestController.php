<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Movie {
    public $title;
    public $description;
    public function __construct($title, $description = null) {
        $this -> title = $title;
        $this -> description = $description == null ?
            "No description" : $description;        
    }
    public function getString() {
        return "Movie '" . $this -> title . "':<br>" 
            . $this -> description; 
    }
}
class TestController extends Controller
{
    public function home() {
        $movie1 = new Movie("Lord of The Rings", "description");
        $movie2 = new Movie("Cosmopolis (2011)");
        $str1 = $movie1 -> getString();
        $str2 = $movie2 -> getString();
        return view('pages.home', compact('movie1', 'movie2'));
    }
}