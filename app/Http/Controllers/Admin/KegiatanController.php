<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\KegiatanRequest;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
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
    public function store(KegiatanRequest $request)
    {
        $data = $request->all();
        $data['gambara'] = $request->file('gambara')->store(
            'aset/gambar/kegiatan', 'public'
        );
        $data['gambarb'] = $request->file('gambarb')->store(
            'aset/gambar/kegiatan', 'public'
        );
        $data['gambarc'] = $request->file('gambarc')->store(
            'aset/gambar/kegiatan', 'public'
        );
        $data['gambard'] = $request->file('gambard')->store(
            'aset/gambar/kegiatan', 'public'
        );

        Kegiatan::create($data);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show($id_kegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(KegiatanRequest $request, $id_kegiatan)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kegiatan)
    {
        $item = Kegiatan::findOrFail($id_kegiatan);
        $item->delete();

        return redirect()->back();
    }
}
