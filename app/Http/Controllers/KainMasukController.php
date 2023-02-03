<?php

namespace App\Http\Controllers;

use App\Models\Helaian;
use App\Models\Jenis;
use App\Models\KainMasuk;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class KainMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(KainMasuk $kainMasuk)
    {
        $data['title'] = 'List Kain Masuk';
        return view('content.kain-masuk.index', compact('kainMasuk'), $data);
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
     * @param  \App\Models\KainMasuk  $kainMasuk
     * @return \Illuminate\Http\Response
     */
    public function show(KainMasuk $kainMasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KainMasuk  $kainMasuk
     * @return \Illuminate\Http\Response
     */
    public function edit(KainMasuk $kainMasuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KainMasuk  $kainMasuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KainMasuk $kainMasuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KainMasuk  $kainMasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(KainMasuk $kainMasuk)
    {
        //
    }
}
