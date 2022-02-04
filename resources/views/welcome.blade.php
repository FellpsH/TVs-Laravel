<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background: #008E97;
        }
    </style>
</head>

<body class="antialiased">
    <p>O valor total das TVs 32 polegadas é: {{$total1}}</p>
    <p>O valor total das TVs 40 polegadas é: {{$total2}}</p>
    <p>O valor total final de todas as TVs é: {{$totalt}}</p>
    <hr>
    <p>O valor total dos Player é: {{$totalA}}</p>
    <p>O valor total dos Players Sugundarios é: {{$totalS}}</p>
    <p>O valor total final de todos os Players é: {{$totalP}}</p>
    <hr>
    <p>Incestimento Inicial: {{$valorI}}</p>
    <p>O valro do Plano é: {{$totalM}}</p>
</body>

</html>
