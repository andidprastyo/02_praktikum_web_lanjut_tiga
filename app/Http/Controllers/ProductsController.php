<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // Ke Marbel-Edu Games
    public function games(){
        return redirect("https://www.educastudio.com/category/marbel-edu-game");
    }

    // Ke Marbel and Friends Kids Games
    public function kids(){
        return redirect("https://www.educastudio.com/category/marbel-and-friends-kids-games");
    }

    // Ke Riri Story Books
    public function storyBooks(){
        return redirect("https://www.educastudio.com/category/riri-story-books");
    }   

    // Ke Kolak Kids Songs
    public function songs(){
        return redirect("https://www.educastudio.com/category/kolak-kids-songs");
    }
}
