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
        $data['title'] = 'List Harga Helaian Laundry Lafisha';
        $helaian = Helaian::all();
        return view('content.Helaian.index', compact('helaian'), $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Tambah Harga Helaian Laundry Lafisha';
        return view('content.Helaian.create_helaian', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Helaian $helaian)
    {
        $request->validate([
            'nama_helaian'=> 'required',
            'harga_helaian' => 'required'
        ]);

        $data = [
            'nama_helaian' => $request->nama_helaian,
            'harga_helaian' => $request->harga_helaian
        ];

        $helaian->insert($data);
        return redirect()->route('helaian.index')->with('succes', 'Data Berhasil Ditambahkan');
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
        $data['title'] = 'Edit Harga Helaian Laundry Lafisha';
        return view('content.Helaian.edit_helaian', compact('helaian'), $data);
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
        $data = [
            'nama_helaian' => $request->nama_helaian,
            'harga_helaian' => $request->harga_helaian
        ];

        $helaian->update($data);
        return redirect()->route('helaian.index')->with('success', 'Data Berhasil Di Ganti');
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
