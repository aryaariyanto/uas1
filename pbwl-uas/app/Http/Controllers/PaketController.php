<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;

class PaketController extends Controller
{

    public function index()
    {
        $rows = Paket::all();
        return view('paket.index' , compact('rows'));
        //
    }

    public function create()
    {
        return view('paket.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_paket' => 'bail|required|unique:tb_paket',
            'kode_paket' => 'required'
],
[
            'id_paket.required' => 'id_paket wajib diisi' ,
            'id_paket.unique' => 'id_paket sudah ada',
            'kode_paket.required' => 'kode_paket wajib diisi'
]);

Paket::create([
    'id_paket' => $request->id_paket,
    'kode_paket' => $request->kode_paket,
    'nama_paket' => $request->nama_paket,
    'harga' => $request->harga,
]);

return redirect('paket');
        //
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
        $row = Paket::find0rFail($id);
        return view('paket.edit' , compact('row'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'id_paket' => 'bail|required',
                'kode_paket' => 'required'
            ],
            [
                'id_paket.required' => 'id_paket wajib diisi',
                'kode_paket.required' => 'kode_paket wajib diisi'
            ]
            );

            $row = Paket::find0rFail($id);
            $row->update([
            'id_paket' => $request->id_paket,
            'kode_paket' => $request->kode_paket,
            'nama_paket' => $request->nama_paket,
            'harga' => $request->harga,
            ]);

            return redirect('paket');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Paket::findOrFail($id);
        $row->delete();

        return redirect('paket');
    }
}
