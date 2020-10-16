<?php

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
use App\Http\Controllers\MyAssignment1Controller;
// Route::get('/', function () {
//     return view('Assignment1index');
// });
// Route::get('/{slug}', function ($slug) {
//     return view('Assignment1index', ["name"=>$slug]);
// });

// Route::get('/{slug}', 'MyAssignment1Controller@index');


Route::get('/', 'MyAssignment1Controller@index1');
    
Route::get('/Achievement', 'MyAssignment1Controller@index');