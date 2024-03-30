<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('', function () {
//     return view('home');
// });
// Route::get('ll', function () {
//     return view('welcome');
// });
Route::view('/', 'home');
Route::view('ll', 'welcome');

//  Route::get('view/{id?}/comit/{comitid}',function($id = null, $comitid = null){
//     if($id){
//         return "<h1>view ID ↪".$id. "</h1><br><hr><h2>Comit ID ↪".$comitid. "</h2>";

//     }else{
//         return "Please Input the id in the search bar";

//     }
     
//  });
Route::get('view/{id?}',function($id){
    if($id){
        return "<h1>view ID ↪".$id. "</h1>";

    }else{
        return "Please Input the id in the search bar";

    }
     
 })->whereIn('id', [1,2,3,4,5]);