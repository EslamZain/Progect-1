<?php

use Illuminate\Support\Facades\Route;



Route::get('/admin', function (){
    return 'Hi A admin';
})->name('new');

