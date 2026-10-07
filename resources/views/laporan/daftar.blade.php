@extends('layouts.app')

@section('title', 'Daftar Laporan')

@section('content')

<h2>Daftar Laporan Banjir</h2>

<p>
    Berikut merupakan beberapa laporan banjir yang telah tercatat
    dalam sistem LaporBanjir.
</p>

@forelse($laporan as $data)

    @include('partials.laporan-card', [
        'laporan' => $data
    ])

@empty

    <div class="card">
        <p>Belum ada laporan banjir.</p>
    </div>

@endforelse

@endsection