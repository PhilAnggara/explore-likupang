<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\WisataRequest;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Wisata::all();
        
        return view('pages.admin.data-objek-wisata', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WisataRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_wisata);

        Wisata::create($data);
        return redirect()->route('data-objek-wisata.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function show($id_wisata)
    {
        $item = Wisata::with([
            'galeri'
        ])->findOrFail($id_wisata);

        return view('pages.admin.detail-objek-wisata',[
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function edit($id_wisata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function update(WisataRequest $request, $id_wisata)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_wisata);

        $item = Wisata::findOrFail($id_wisata);
        $item->update($data);
        
        return redirect()->route('data-objek-wisata.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_wisata)
    {
        //
    }
}
