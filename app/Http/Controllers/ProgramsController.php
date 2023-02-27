<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    public function karir(){
        return redirect('<a href=https://www.educastudio.com/program/karir>Karir</link>');
    }

    public function magang(){
        return redirect('<a href=https://www.educastudio.com/program/magang>Magang</link>');
    }

    public function kunjungan_industri(){
        return redirect('<a href=https://www.educastudio.com/program/kunjungan-industri>Kunjungan Industri</link>');
    }
}
