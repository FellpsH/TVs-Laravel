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
            background: whitesmoke;
            background-image: linear-gradient(45deg, black, purple);
            height: 100vh;
            color: white;
            text-align: center;
        }

        .calculadora {
            position: absolute;
            background-color: rgba(0, 0, 0, 0.8);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 15px;
            padding: 15px;
        }
    </style>
</head>

<body class="antialiased">
    <div class="fundo">
        <div class="calculadora">
            <p>O valor total das TVs 32 polegadas é: ${{$total1}}</p>
            <p>O valor total das TVs 40 polegadas é: ${{$total2}}</p>
            <p>O valor total final de todas as TVs é: ${{$totalt}}</p>
            <hr>
            <p>O valor total dos Player é: ${{$totalA}}</p>
            <p>O valor total dos Players Secundário é: ${{$totalS}}</p>
            <p>O valor total final de todos os Players é: ${{$totalP}}</p>
            <hr>
            <p>Incestimento Inicial: ${{$valorI}}</p>
            <p>O valro do Plano é: ${{$totalM}}</p>
        </div>
        <div>
</body>

</html>


<!-- <div class="fundo">
        <h2>Orsamento</h2>
        <div class="calculadora">
            <h2>Quantas tvs você ira precisar?</h2><br>
            <p>Quantos televisores de 32 polegadas? (Valor por unidade: $500)
                <input type="number" name="quant" required /><br>
            </p>
            <input type="submit" value="Calcular">
            <br>
            <p>O resultado é Erro</p>
        </div>
    <div> -->
