<?php

namespace App\Http\Controllers;

use App\Models\Helaian;
use Illuminate\Http\Request;

class HelaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $helaian = Helaian::all();
        return view('content.Helaian.index', compact('helaian'));
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
     * @param  \App\Models\Helaian  $helaian
     * @return \Illuminate\Http\Response
     */
    public function show(Helaian $helaian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Helaian  $helaian
     * @return \Illuminate\Http\Response
     */
    public function edit(Helaian $helaian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Helaian  $helaian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Helaian $helaian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Helaian  $helaian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Helaian $helaian)
    {
        //
    }
}
