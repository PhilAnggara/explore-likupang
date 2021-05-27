<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\WahanaRequest;
use App\Models\Wahana;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WahanaController extends Controller
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
    public function store(WahanaRequest $request)
    {
        $data = $request->all();
        $data['gambara'] = $request->file('gambara')->store(
            'aset/gambar/wahana', 'public'
        );
        $data['gambarb'] = $request->file('gambarb')->store(
            'aset/gambar/wahana', 'public'
        );

        Wahana::create($data);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wahana  $wahana
     * @return \Illuminate\Http\Response
     */
    public function show($id_wahana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wahana  $wahana
     * @return \Illuminate\Http\Response
     */
    public function edit($id_wahana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wahana  $wahana
     * @return \Illuminate\Http\Response
     */
    public function update(WahanaRequest $request, $id_wahana)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wahana  $wahana
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_wahana)
    {
        $item = Wahana::findOrFail($id_wahana);
        $item->delete();

        return redirect()->back();
    }
}
