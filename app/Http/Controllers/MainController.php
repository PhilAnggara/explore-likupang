<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Models\Saran;
use App\Models\Wahana;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

// Notification
use App\Models\User;
use Illuminate\Support\Facades\Notification;
use App\Notifications\SaranMasuk;

use App\Events\SaranDitambahkan;

class MainController extends Controller
{
    public function index()
    {
        $items = Wisata::where('populer', 1)->limit(4)->get();
        return view('pages.beranda', [
            'items' => $items
        ]);
    }

    public function wisata(Request $request)
    {
        if ($request->has('cari')) {            
            $items = Wisata::Where('nama_wisata', 'LIKE', '%'.$request->cari.'%')->get()->sortBy('jarak');
        } else {
            $items = Wisata::all()->sortBy('jarak');
        }

        return view('pages.objek-wisata', [
            'items' => $items,
            'cari' => $request->cari
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

        $admin = User::where('roles', 'ADMIN')->get();
        $id_saran = Saran::all()->last()->id_saran;

        Notification::send($admin, new SaranMasuk($id_saran));
        
        return redirect()->back();
    }

    // public function saran(Request $request)
    // {
    //     $data = $request->all();
        
    //     event(new SaranDitambahkan($data));
    //     dd($data);
        
    //     return redirect()->back();
    // }
    // public function saran(Request $request)
    // {
    //     $data = $request->all();

    //     $admin = User::where('roles', 'ADMIN')->get();
    //     $id_saran = Saran::all()->last()->id_saran;

    //     Notification::send($admin, new SaranMasuk($id_saran));
        
    //     return redirect()->back();
    // }

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
