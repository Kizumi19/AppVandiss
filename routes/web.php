<?php

use App\Http\Controllers\RegisterController;
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
    return view('welcome');
});

//Creat de prova
Route::get('/benvinguda', function () {
    return view('welcome');

});

Route::get('/contacte', function(){
    return "Contactam";
})->name('contacte');

//Tutorial per poder tenir el Login i el Registre
Route::get('/register', function(){
    return view('auth.register');
});

Route::post('/register',[RegisterController::class, 'register']);