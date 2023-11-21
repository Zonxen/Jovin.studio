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

Route::get('/laravel', function () {
    return view('welcome');
});
Route::get('/', function (){
    return view('home', [
        'title' => "Home",
        'content' => "Ini adalah konten",
    ]);
});
Route::get('/about', function (){
    return view('about', [
        'title' => "About",
    ]);
});
Route::get('/project', function (){
    return view('project', [
        'title' => "Projects",
    ]);
});
Route::get('/testimony', function (){
    return view('testimony', [
        'title' => "Testimony",
    ]);
});
Route::get('/pricing', function (){
    return view('pricing', [
        'title' => "Pricing",
    ]);
});