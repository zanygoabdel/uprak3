<div class="card">

    <h2>{{ $laporan['lokasi'] }}</h2>

    <div class="laporan-info">

        <p>
            <strong>Nama Pelapor:</strong>
            {{ $laporan['nama'] }}
        </p>

        <p>
            <strong>Tinggi Genangan:</strong>
            {{ $laporan['tinggi'] }} cm
        </p>

        @if($laporan['tinggi'] < 30)

            <span class="status waspada">
                Waspada
            </span>

        @elseif($laporan['tinggi'] <= 70)

            <span class="status siaga">
                Siaga
            </span>

        @else

            <span class="status awas">
                Awas
            </span>

        @endif

    </div>

</div>