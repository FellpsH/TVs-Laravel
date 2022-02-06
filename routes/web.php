<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;
use Illuminate\Http\Request;


// Erro

// Route::get('/', function (Request $request) {
//     $tv32 = 500;
//     $quant = $request->input('quant');
//     $resultado = $quant * $tv32;

//     return view('welcome', ['resultado' => $resultado]);
// });

Route::get('/', function () {

    $tv32 = 500.00;
    $tv40 = 1000.00;

    $total1 = 4 * $tv32;

    $total2 = 4 * $tv40;

    $totalt = $total1 + $total2;

    $PA = 292.00;
    $PS = 249.00;

    $totalA = 2 * $PA;

    $totalS = 2 * $PS;

    $totalP = $totalA + $totalS;

    $mensal = 10;
    $prata = 49.00;

    $totalM = $mensal * $prata;

    $mao = 2000;

    $valorI = $totalt + $totalP + $totalM + $mao;




    // $resultado = 3;


    // if (isset($_GET['quant'], $_GET['Calcular'])) {
    //     $quant = $_GET['quant'];
    //     echo 'aaaaaaaaaaaaaaa';
    //     $resultado = $quant * $tv32;
    // }


    return view(
        'welcome',
        [
            'tv32' => $tv32,
            'tv40' => $tv40,
            'total1' => $total1,
            'total2' => $total2,
            'totalt' => $totalt,
            'PA' => $PA,
            'PS' => $PS,
            'totalA' => $totalA,
            'totalS' => $totalS,
            'totalP' => $totalP,
            'totalM' => $totalM,
            'valorI' => $valorI,
            // 'resultado' => $resultado
        ]
    );
});
