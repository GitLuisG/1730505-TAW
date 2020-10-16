<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

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

//Rutas
Route::get('/', function () {
    return view('index',
    ['id' => "Bienvenido"]
    );
});

Route::get('/Sobre_Nosotros', function () {
    return view('index',['id' => "Sobre_Nosotros"]);//[ContactsController::class, 'show'];
});

Route::get('/Trabajos', function () {
    return view('index',['id' => "Trabajos"]);//[ContactsController::class, 'show'];
});

Route::get('/Galleria', function () {
    return view('index',['id' => "Galleria"]);//[ContactsController::class, 'show'];
});

Route::get('/Blog', function () {
    return view('index',['id' => "Blog"]);//[ContactsController::class, 'show'];
});

Route::get('/Contactanos', function () {
    return view('index',['id' => "Contactanos"]);//[ContactsController::class, 'show'];
});

Route::middleware('cache.headers:public;max_age=2628000;etag')->group(function () {
    Route::get('privacy', function () {
        // ...
    });

    Route::get('terms', function () {
        // ...
    });
});