<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    // Halaman form pelaporan
    public function form()
    {
        return view('laporan.form');
    }

    // Memproses laporan dari form
    public function simpan(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'lokasi' => 'required',
            'tinggi' => 'required|numeric|min:0',
        ]);

        $laporan = [
            'nama' => $request->nama,
            'lokasi' => $request->lokasi,
            'tinggi' => $request->tinggi,
        ];

        return view('laporan.konfirmasi', compact('laporan'));
    }

    // Halaman daftar laporan
    public function daftar()
    {
        $laporan = [
            [
                'nama' => 'Andi',
                'lokasi' => 'Cimahi',
                'tinggi' => 20
            ],
            [
                'nama' => 'Budi',
                'lokasi' => 'Baleendah',
                'tinggi' => 50
            ],
            [
                'nama' => 'Siti',
                'lokasi' => 'Dayeuhkolot',
                'tinggi' => 85
            ],
            [
                'nama' => 'Rina',
                'lokasi' => 'Bojongsoang',
                'tinggi' => 35
            ],
        ];

        return view('laporan.daftar', compact('laporan'));
    }
}