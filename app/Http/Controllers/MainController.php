<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Models\Saran;
use App\Models\Wahana;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $items = Wisata::where('populer', 1)->limit(4)->get();
        return view('pages.beranda', [
            'items' => $items
        ]);
    }

    public function wisata()
    {
        $items = Wisata::all();
        return view('pages.objek-wisata', [
            'items' => $items
        ]);
    }

    public function detail(Request $request, $slug)
    {
        $item = Wisata::with(['galeri','saran','wahana','kegiatan'])
            ->where('slug', $slug)
            ->firstOrFail();
        return view('pages.detail', [
            'item' => $item
        ]);
    }

    public function saran(Request $request)
    {
        $data = $request->all();
        
        Saran::create($data);
        
        return redirect()->back();
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
