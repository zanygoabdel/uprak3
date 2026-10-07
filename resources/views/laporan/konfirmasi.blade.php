@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')

<div class="card">

    <x-alert
        type="success"
        message="Laporan banjir berhasil dikirim!"
    />

    <h2>Konfirmasi Laporan</h2>

    <div class="laporan-info">

        <p>
            <strong>Nama Pelapor:</strong>
            {{ $laporan['nama'] }}
        </p>

        <p>
            <strong>Lokasi Kejadian:</strong>
            {{ $laporan['lokasi'] }}
        </p>

        <p>
            <strong>Tinggi Genangan:</strong>
            {{ $laporan['tinggi'] }} cm
        </p>

    </div>

    <a href="{{ route('laporan.form') }}">
        <button type="button">
            Buat Laporan Baru
        </button>
    </a>

</div>

@endsection