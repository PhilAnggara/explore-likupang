<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Models\Saran;
use App\Models\Wahana;
use App\Models\Kegiatan;
use App\Models\KeadaanGeografis;
use App\Models\Demografi;
use App\Models\StrukturPemerintahan;
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
        $items = Wisata::with('galeri')->where('populer', 1)->take(4)->get();
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
        $saran = Saran::where('id_wisata', $item->id_wisata)->where('status', 'Diterima')->get();

        return view('pages.detail', [
            'item' => $item,
            'saran' => $saran
        ]);
    }

    public function saran(Request $request)
    {
        $data = $request->all();
        if ($request->file('foto')) {
            $data['foto'] = $request->file('foto')->store(
                'aset/gambar/saran', 'public'
            );
        }
        
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
        $text = KeadaanGeografis::all()->last();
        if ($text) {
            $text = $text->text;
        }
        return view('pages.keadaan-geografis', compact('text'));
    }

    public function demografi()
    {
        $text = Demografi::all()->last();
        if ($text) {
            $text = $text->text;
        }
        return view('pages.demografi', compact('text'));
    }

    public function struktur()
    {
        $desktop = StrukturPemerintahan::where('tipe', 'desktop')->get()->last();
        $mobile = StrukturPemerintahan::where('tipe', 'mobile')->get()->last();

        return view('pages.struktur-pemerintahan', compact('desktop', 'mobile'));
    }
}
