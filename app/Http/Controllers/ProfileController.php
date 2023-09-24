<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nama = 'Hafsah Islamiati Ayuningtyas';
        $umur = "20 tahun";
        $lokasi = 'Bandung';
        $univ = "Universitas Langlangbuana";
        $prodi = "Teknik Informatika";

        $data['nama'] = $nama;
        $data['umur'] = $umur;
        $data['lokasi'] = $lokasi;
        $data['univ'] = $univ;
        $data['prodi'] = $prodi;

        return view('halaman/profile', $data);
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
        //
    }
}
