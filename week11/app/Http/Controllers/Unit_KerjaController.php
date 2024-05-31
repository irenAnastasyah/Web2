<?php

namespace App\Http\Controllers;

use App\Models\Unit_Kerja; //tambahin ini
use Illuminate\Http\Request;

class Unit_KerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_unit_kerja = Unit_Kerja::all();
// buat turunan model Unit_Kerja
        return view('unit_kerja.index', ['data_unit_kerja'=>$data_unit_kerja]);
// kirim array data ke view unit_kerja index menggunakan assosiatif array
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $unit_kerja = new Unit_Kerja;
        $unit_kerja->nama = $request->nama;
        $unit_kerja->save();
        return redirect('unit_kerja');
        
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // kasih perintah hapus data
    }
}
