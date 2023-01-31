<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'List Pelanggan';
        $pelanggan = Pelanggan::all();
        return view('content.pelanggan.index', compact('pelanggan'),  $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Tambah Pelanggan';
        return view('content.pelanggan.create_pelanggan', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Pelanggan $pelanggan)
    {
        $request->validate([
            'nama_pelanggan'=> 'required',
            'no_pelanggan' => 'nullable'
        ]);

        $data = [
            'nama_pelanggan' => $request->nama_pelanggan,
            'no_pelanggan' => $request->no_pelanggan
        ];

        $pelanggan->insert($data);
        return redirect()->route('pelanggan.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelanggan $pelanggan)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelanggan $pelanggan)
    {
        $data['title'] = 'Edit Pelanggan';
        return view('content.pelanggan.edit_pelanggan', compact('pelanggan'), $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelanggan $pelanggan)
    {
        $data = [
            'nama_pelanggan' => $request->nama_pelanggan,
            'no_pelanggan' =>$request->no_pelanggan
        ];
        $pelanggan->update($data);
        return redirect()->route('pelanggan.index')->with('success', 'Data Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelanggan $pelanggan)
    {
        //
    }
}
