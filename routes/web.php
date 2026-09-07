<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('pages.inicio');
});

Route::get('/nosotros', function () {
    return view('pages.nosotros');
});

Route::get('/programas', function () {
    return view('pages.programas.index');
});

Route::get('/programas/brazo-robotico', function () {
    return view('pages.programas.show');
});

// Catch all for other programs to show the detail page demo
Route::get('/programas/{slug}', function () {
    return view('pages.programas.show');
});

Route::get('/blog', [BlogController::class, 'index']);

Route::get('/certificaciones', function () {
    return view('pages.certificaciones');
});

Route::get('/contacto', function () {
    return view('pages.contacto');
});
