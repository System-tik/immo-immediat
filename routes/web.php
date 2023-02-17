<?php

use App\Http\Livewire\Client\VResult;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('pages.welcome');
});
Route::get('/details/{id}', function ($id) {
    return view('pages.detail', ['idb'=>$id]);
})->name('detail');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/test', function (){
    return view('pages.test');
});
Route::get('/form', function (){
    return view('pages.form');
});


Route::post('/search',function(Request $request){
    return view('pages.result',['request'=>$request]);
});


Route::get('/agence', function (){
    return view('pages.agence');
})->name('agence');



Route::get('/agence', function (){
    return view('pages.agence');
})->name('agence');

