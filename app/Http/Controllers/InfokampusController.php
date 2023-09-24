<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfokampusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nama = 'Universitas Langlangbuana adalah salah satu perguruan tinggi swasta yang ada di Bandung, 
        Jawa Barat, Indonesia. Universitas ini berada di bawah naungan Yayasan Pendidikan Tri Bhakti 
        Langlangbuana. Kampus ini bertempat di Jln. Karapitan No. 116 Bandung. Saat ini Unla memiliki lima 
        fakultas dengan rincian: 1 Program studi Diploma-III, 14 Program studi sarjana (S1), dan 
        4 Program studi magister (S2) .';

        $data['nama'] = $nama;

        return view('/halaman/infokampus', $data);
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
