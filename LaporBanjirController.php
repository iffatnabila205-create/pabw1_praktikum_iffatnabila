<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    
    public function index()
    {
        return view('laporbanjir.form');
    }

    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pelapor'    => 'required|string|max:100',
            'lokasi'          => 'required|string|max:150',
            'tinggi_genangan' => 'required|numeric|min:0',
        ]);

        
        return view('laporbanjir.konfirmasi', [
            'nama_pelapor'    => $validated['nama_pelapor'],
            'lokasi'          => $validated['lokasi'],
            'tinggi_genangan' => $validated['tinggi_genangan'],
        ]);
    }
}
