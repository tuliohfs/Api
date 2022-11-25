<?php

use Illuminate\Support\Facades\Route;
use Illuminate\support\Facades\Http;
use App\Http\Controllers\apiController;


Route::get('/', function () {
    $pai = Http::get('https://servicodados.ibge.gov.br/api/v1/localidades/paises?orderBy=nome');
    $apiArray = $pai -> json();

    return view('api', ['apiArray' => $apiArray]);
});
