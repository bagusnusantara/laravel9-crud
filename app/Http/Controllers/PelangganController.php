<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pelanggan::all();
        return view('pelanggan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pelanggan' => 'required|max:255',
            'alamat' => 'required|max:255',
            'kota' => 'required|max:255',
            'jenis_pelanggan' => 'required',
            'no_telepon' => 'required|numeric|digits_between:9,14',
            'plafon' => 'required|numeric|min:10000',
        ]);
        Pelanggan::create($validatedData);

        return redirect('/pelanggan')->with('success', 'Data pelanggan berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kode_pelanggan)
    {
        $data = Pelanggan::where('kode_pelanggan', $kode_pelanggan)->first();
        return view('pelanggan.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kode_pelanggan)
    {
        $data = Pelanggan::where('kode_pelanggan', $kode_pelanggan)->first();
        return view('pelanggan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_pelanggan)
    {
        $validatedData = $request->validate([
            'nama_pelanggan' => 'required|max:255',
            'alamat' => 'required|max:255',
            'kota' => 'required|max:255',
            'jenis_pelanggan' => 'required',
            'no_telepon' => 'required|numeric|digits_between:9,14',
            'plafon' => 'required|numeric|min:10000',
        ]);
        Pelanggan::where('kode_pelanggan', $kode_pelanggan)->update($validatedData);

        return redirect('/pelanggan')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_pelanggan)
    {
        $data = Pelanggan::where('kode_pelanggan', $kode_pelanggan)->delete();

        return redirect('/pelanggan')->with('success', 'Data berhasil dihapus');
    }
}
