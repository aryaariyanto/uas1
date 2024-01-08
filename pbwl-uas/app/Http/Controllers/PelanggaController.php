<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelanggaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pelanggan::all();
        return view('pelanggan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pel_id' => 'required',
            'pel_id' => 'bail|required|unique:tb_pelanggan',
            'kode_paket' => 'required'
        ],
        [
            'pel_id.required' => 'Id golongan wajib diisi',
            'pel_id.required' => 'Kode wajib diisi',
            'pel_id.unique' => 'Kode sudah ada',
            'kode_paket.required' => 'Nama wajib diisi'
        ]);

        Pelanggan::create([
            'pel_id' => $request->pel_id,
            'kode_paket' => $request->kode_paket,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);

        return redirect('pelanggan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
            'pel_id' => 'required',
            'pel_id' => 'bail|required',
            'kode_paket' => 'required'
        ],
        [
            'pel_id.required' => 'Id golongan wajib diisi',
            'pel_id.required' => 'Kode wajib diisi',
            'kode_paket.required' => 'Nama wajib diisi'
        ]);

        $row = Pelanggan::findOrFail($id);
        $row->update([
            'pel_id' => $request->pel_id,
            'kode_paket' => $request->kode_paket,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);
        
        return redirect('pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pelanggan::findOrFail($id);
        $row->delete();

        return redirect('pelanggan');
    }
}
