<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - LaporBanjir</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }

        header {
            background: #0f172a;
            color: white;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
            font-weight: bold;
        }

        nav a:hover {
            color: #38bdf8;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: 40px auto;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }

        h2 {
            margin-top: 0;
            color: #0f172a;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 7px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 15px;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 13px;
            background: #0284c7;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #0369a1;
        }

        .laporan-info {
            line-height: 1.8;
        }

        .status {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: bold;
            margin-top: 10px;
        }

        .waspada {
            background: #fef3c7;
            color: #92400e;
        }

        .siaga {
            background: #fed7aa;
            color: #9a3412;
        }

        .awas {
            background: #fecaca;
            color: #991b1b;
        }

        .alert {
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            background: #dcfce7;
            color: #166534;
            border-left: 5px solid #22c55e;
        }

        .error {
            color: #dc2626;
            font-size: 14px;
            margin-top: 5px;
        }

        footer {
            margin-top: 50px;
            background: #0f172a;
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>

<header>
    <h1>🌊 LaporBanjir</h1>

    <nav>
        <a href="{{ route('laporan.form') }}">Lapor Banjir</a>
        <a href="{{ route('laporan.daftar') }}">Daftar Laporan</a>
    </nav>
</header>

<main class="container">
    @yield('content')
</main>

<footer>
    <p>&copy; 2026 LaporBanjir - BPBD Kabupaten Bandung</p>
</footer>

</body>
</html>