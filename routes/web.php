<?php

use App\Services\Cards;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $cards = Cards::getAll();

    return view('cards', compact('cards'));
});
