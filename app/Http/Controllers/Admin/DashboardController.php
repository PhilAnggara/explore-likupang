<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wisata;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $wisata = Wisata::all()->count();
        $user = User::where('roles', 'USER')->count();

        return view('pages.admin.dashboard', compact('wisata','user'));
    }
}
