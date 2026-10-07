@extends('layouts.app')

@section('title', 'Form Pelaporan')

@section('content')

<div class="card">

    <h2>Form Pelaporan Banjir</h2>

    <p>
        Silakan isi data kejadian banjir yang terjadi di wilayah Anda.
    </p>

    <form action="{{ route('laporan.simpan') }}" method="POST">

        @csrf

        <label for="nama">Nama Pelapor</label>
        <input
            type="text"
            id="nama"
            name="nama"
            value="{{ old('nama') }}"
            placeholder="Masukkan nama Anda"
        >

        @error('nama')
            <div class="error">{{ $message }}</div>
        @enderror


        <label for="lokasi">Lokasi Kejadian</label>
        <input
            type="text"
            id="lokasi"
            name="lokasi"
            value="{{ old('lokasi') }}"
            placeholder="Contoh: Baleendah, Bandung"
        >

        @error('lokasi')
            <div class="error">{{ $message }}</div>
        @enderror


        <label for="tinggi">Tinggi Genangan Air (cm)</label>
        <input
            type="number"
            id="tinggi"
            name="tinggi"
            value="{{ old('tinggi') }}"
            placeholder="Contoh: 50"
        >

        @error('tinggi')
            <div class="error">{{ $message }}</div>
        @enderror


        <button type="submit">
            Kirim Laporan
        </button>

    </form>

</div>

@endsection