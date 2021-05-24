<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('pages.beranda');
    }
    public function wisata()
    {
        return view('pages.objek-wisata');
    }
    public function geografis()
    {
        return view('pages.keadaan-geografis');
    }
    public function demografi()
    {
        return view('pages.demografi');
    }
    public function struktur()
    {
        return view('pages.struktur-pemerintahan');
    }
}
