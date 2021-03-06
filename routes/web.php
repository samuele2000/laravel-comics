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
    
    $comics = config('comics');
    $menuHero = config('menuHero');
    $linkFooter = config('linkFooter');

    return view('home', ['comics' => $comics], ['menuHero' => $menuHero], ['linkFooter' => $linkFooter]);

});

Route::get('/comics/{id}', function ($id){
    $comics = config('comics');

    if( is_numeric($id) && $id < count($comics) && $id >= 0 ){
        $comic = $comics[$id];

        return view ('comic', ['comicId' => $comic]);
    } else{
        abort(404);
    }
}) ->name('comic');

