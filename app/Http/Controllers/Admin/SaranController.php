<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SaranRequest;
use App\Models\Saran;
use Illuminate\Http\Request;
use Auth;

class SaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Saran::orderByDesc('id_saran')->paginate(5);
        $unread = Auth::user()->unreadNotifications->count();
        
        Auth::user()->unreadNotifications->markAsRead();

        return view('pages.admin.data-saran', compact('items', 'unread'));
    }
    
    public function approve($id_saran)
    {
        $saran = Saran::find($id_saran);
        $saran->status = 'Diterima';
        $saran->save();
        return back();
    }
    public function deny($id_saran)
    {
        $saran = Saran::find($id_saran);
        $saran->status = 'Ditolak';
        $saran->save();
        return back();
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
