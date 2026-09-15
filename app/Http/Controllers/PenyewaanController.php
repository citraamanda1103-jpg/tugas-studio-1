<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenyewaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $penyewaan = [
        [
            'id' => 1,
            'penyewa' => 'Andi',
            'barang' => 'Kamera',
            'tanggal' => '15 September 2026',
            'status' => 'Diajukan',
        ],
        [
            'id' => 2,
            'penyewa' => 'Budi',
            'barang' => 'Proyektor',
            'tanggal' => '16 September 2026',
            'status' => 'Disetujui',
        ],
        [
            'id' => 3,
            'penyewa' => 'Citra',
            'barang' => 'Laptop',
            'tanggal' => '17 September 2026',
            'status' => 'Diajukan',
        ],
    ];

    return view('penyewaan.index', compact('penyewaan'));
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
