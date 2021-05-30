<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wisata;
use App\Models\User;
use App\Models\Saran;
use Illuminate\Http\Request;

use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $wisata = Wisata::all()->count();
        $user = User::where('roles', 'USER')->count();
        $saran_hari = Saran::whereDate('created_at', Carbon::today())->count();
        $saran_bulan = Saran::whereMonth('created_at', Carbon::now()->month)->count();

        return view('pages.admin.dashboard', compact('wisata','user','saran_hari','saran_bulan'));
    }
}
