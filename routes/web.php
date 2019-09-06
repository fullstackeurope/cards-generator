<?php

use App\Services\Cards;

Route::get('/', function () {
    $cards = Cards::getAll();

    return view('cards', compact('cards'));
});
