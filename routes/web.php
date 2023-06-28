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

Route::get('/chisiamo', function(){
    $founders=[
        ["name"=>"Rosalinda", "surname"=>"Auciello", "role"=>"fondatrice", "img"=>"/img/rosalinda.jpg"],
        ["name"=>"Leonardo", "surname"=>"Lerario", "role"=>"fondatore", "img"=>"/img/leonardo.jpg"], 
        ["name"=>"Pasquale", "surname"=>"Casalino", "role"=>"co-fondatore", "img"=>"/img/pasquale.jpg"],  
    ]; 
    return view('chisiamo', ['fondatori'=>$founders]); 
}); 

Route::get('/articoli', function(){
    $products=[
        ["name"=>"smartphone", "price"=>"300€", "img"=>"/img/smartphone.jpg"],
        ["name"=>"occhiali", "price"=>"30€", "img"=>"/img/occhiali.jpg"],
        ["name"=>"bracciale", "price"=>"100€", "img"=>"/img/bracciale.jpg"],
        ["name"=>"computer", "price"=>"1000€", "img"=>"/img/computer.jpg"],
    ]; 
    return view('articoli', ["prodotti"=>$products]); 
}); 
