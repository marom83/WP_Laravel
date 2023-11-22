<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
   return '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
                <h1>Hello World!</h1>
            </body>
            </html>';
});

Route::get('/hello2', function () {
    return view('static_pages.hello2');
});

Route::get('/pontosIdo', function () {
    return view('static_pages.ora');
});

/*Route::get('/dolgozok', function () {
    return view('employees.list');
})->name('dolgozok.lista');*/

Route::get('/dolgozok', 'App\Http\Controllers\EmployeeController@list')->name('dolgozok.lista');


/*Route::get('/dolgozok/uj', function () {
    return view('employees.add');
})->name('dolgozok.hozzaad');*/

Route::get('/dolgozok/uj', 'App\Http\Controllers\EmployeeController@add')->name('dolgozok.hozzaad');

Route::post('/dolgozok/uj', 'App\Http\Controllers\EmployeeController@store')->name('dolgozok.letrehoz');

Route::delete('dolgozok/torol/{rekord}', 'App\Http\Controllers\EmployeeController@delete')->name('dolgozok.torol');  