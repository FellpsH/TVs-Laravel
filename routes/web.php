<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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
            'valorI' => $valorI
        ]
    );
});
