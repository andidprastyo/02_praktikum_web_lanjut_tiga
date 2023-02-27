<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ke Home Educastudio
        return redirect("https://www.educastudio.com/");
    }
}
