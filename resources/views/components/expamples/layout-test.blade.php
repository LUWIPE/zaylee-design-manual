<!doctype html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: sans-serif;
        }

        table {
            width: 100%;
            background-color: #ddd;
            text-align: left;
        }

        table th {
            background-color: #eee;
            font-size: large;
            padding: 8px 4px;
        }

        table td {
            background-color: #fff;
            padding: 8px 4px;
        }

        .agx-form-section {
            border: 1px solid #aaa;
            padding: 0 1em;
        }

        .agx-form-section-header {
            font-size: larger;
            font-weight: bold;
        }

        .agx-form-group {
            margin-bottom: 1em;
        }

        .agx-form-group label {
            font-weight: bold;
        }

    </style>
</head>
<body>
<h1>Connecto</h1>
@if(auth()->check())
    <nav>
        <a href="/">Hjem</a>
        |
        <a href="/accounts">Selskaber</a>
        |
        <a href="/employees">Medarbejdere</a>
        |
        <a href="/crm/1/customers">Kunder</a>
        |
        <a href="{{ route('logout') }}">Log ud</a>
    </nav>
@endif
{{ $slot }}
</body>
</html>
