<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'List Jenis Paket Laundry Lafisha';
        $jenis = Jenis::all();
        return view('content.jenis.index', compact('jenis'), $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Tambah Jenis Paket Laundry Lafisha';
        return view('content.jenis.create_jenis', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Jenis $jenis)
    {
        $request->validate([
            'jenis_nama' => 'required',
            'jenis_harga' => 'nullable',
            'jenis_status' => 'required'
        ]);

        $data = [
            'jenis_nama' => $request->jenis_nama,
            'jenis_harga' => $request->jenis_harga,
            'jenis_status' => $request->jenis_status,
        ];

        $jenis->insert($data);
        return redirect()->route('jenis.index')->with('success', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function show(Jenis $jenis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function edit(Jenis $jenis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jenis $jenis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jenis $jenis)
    {
        //
    }
}
