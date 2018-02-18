<?php
Route::get('/{any}', function () {
    return view('vue');
})->where('any', '.*');